<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('order')->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'source_code' => 'nullable',
            'parent_page' => 'nullable|string|max:255',
            'menu_order' => 'nullable|integer|min:0',
            'is_published' => 'boolean',
            'image' => 'nullable|image|max:2048',
            'selected_media_urls' => 'nullable|string'
        ]);

        $page = new Page();
        $page->title = $validatedData['title'];
        $page->content = $validatedData['content'];
        $page->source_code = $validatedData['source_code'] ?? null;
        $page->parent_page = $validatedData['parent_page'];
        $page->is_published = $validatedData['is_published'] ?? false;

        // Handle menu ordering
        if (isset($validatedData['menu_order'])) {
            $page->order = $validatedData['menu_order'];
        } else {
            $maxOrder = Page::where('parent_page', $validatedData['parent_page'])->max('order');
            $page->order = $maxOrder ? $maxOrder + 1 : 0;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pages', 'public');
            $page->image_path = $imagePath;
        }

        // Handle media library images
        if ($request->filled('selected_media_urls')) {
            $selectedUrls = json_decode($request->selected_media_urls, true);
            if (is_array($selectedUrls) && !empty($selectedUrls)) {
                $page->images = $selectedUrls;
            } else {
                // If empty array is provided, clear the images
                $page->images = null;
            }
        } else {
            // If no URLs are selected, clear the images
            $page->images = null;
        }

        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        // Validasi dengan pesan error kustom untuk field content
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'source_code' => 'nullable',
            'parent_page' => 'nullable|string|max:255',
            'menu_order' => 'nullable|integer|min:0',
            'is_published' => 'boolean',
            'image' => 'nullable|image|max:2048',
            'selected_media_urls' => 'nullable|string'
        ], [
            'content.required' => 'Konten halaman tidak boleh kosong.'
        ]);

        // Pastikan content tidak null sebelum menyimpan
        if (empty($request->content)) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['content' => 'Konten halaman tidak boleh kosong.']);
        }
        
        $page->title = $validatedData['title'];
        $page->content = $validatedData['content'];
        $page->source_code = $validatedData['source_code'] ?? null;
        $page->parent_page = $validatedData['parent_page'];
        $page->is_published = $validatedData['is_published'] ?? false;

        // Handle menu ordering
        if (isset($validatedData['menu_order'])) {
            $page->order = $validatedData['menu_order'];
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($page->image_path) {
                Storage::disk('public')->delete($page->image_path);
            }
            $imagePath = $request->file('image')->store('pages', 'public');
            $page->image_path = $imagePath;
        }

        // Handle media library images
        if ($request->filled('selected_media_urls')) {
            $selectedUrls = json_decode($request->selected_media_urls, true);
            if (is_array($selectedUrls) && !empty($selectedUrls)) {
                $page->images = $selectedUrls;
            } else {
                // If empty array is provided, clear the images
                $page->images = null;
            }
        } else {
            // If no URLs are selected, clear the images
            $page->images = null;
        }

        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        if ($page->image_path) {
            Storage::disk('public')->delete($page->image_path);
        }
        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully.');
    }

    public function move(Request $request, Page $page)
    {
        $direction = $request->direction;
        $currentOrder = $page->order;

        if ($direction === 'up') {
            $swapPage = Page::where('parent_page', $page->parent_page)
                ->where('order', '<', $currentOrder)
                ->orderBy('order', 'desc')
                ->first();
        } else {
            $swapPage = Page::where('parent_page', $page->parent_page)
                ->where('order', '>', $currentOrder)
                ->orderBy('order', 'asc')
                ->first();
        }

        if ($swapPage) {
            $swapOrder = $swapPage->order;
            $swapPage->order = $currentOrder;
            $page->order = $swapOrder;

            $swapPage->save();
            $page->save();
        }

        return redirect()->route('admin.pages.index');
    }
}