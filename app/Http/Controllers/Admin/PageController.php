<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function move(Page $page, Request $request)
    {
        $direction = $request->direction;
        $currentOrder = $page->order;

        // Fix direction logic: 'up' means decreasing order number (moving up in the list)
        // 'down' means increasing order number (moving down in the list)
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
            $swapPage->update(['order' => $currentOrder]);
            $page->update(['order' => $swapOrder]);
        }

        return redirect()->back()->with('success', 'Page order updated successfully.');
    }
    public function index()
    {
        // Get parent pages (null parent_page) first, then child pages, all ordered by their order field
        $pages = Page::orderBy('parent_page', 'asc')
                    ->orderBy('order', 'asc')
                    ->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'parent_page' => 'nullable|string|max:255',
            'menu_order' => 'nullable|integer',
            'title' => 'required|max:255',
            'content' => 'required',
            'is_published' => 'boolean',
            'parent_page' => 'nullable|string',
            'selected_media_urls' => 'nullable|string',
            'menu_order' => 'nullable|integer'
        ]);

        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $counter = 1;

        while (Page::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        $validated['slug'] = $slug;
        $validated['is_published'] = (int)$validated['is_published'];

        // Handle selected media URLs
        if ($request->filled('selected_media_urls')) {
            $mediaUrls = json_decode($request->selected_media_urls, true);
            if (is_array($mediaUrls)) {
                $validated['images'] = array_map(function($url) {
                    return str_replace('/storage/', '', parse_url($url, PHP_URL_PATH));
                }, $mediaUrls);
            }
        }

        // Handle direct file upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $validated['images'] = $validated['images'] ?? [];
            $validated['images'][] = str_replace('public/', '', $path);
        }

        // Set the order value based on parent_page
        if ($validated['parent_page']) {
            $highestOrder = Page::where('parent_page', $validated['parent_page'])->max('order') ?? 0;
        } else {
            $highestOrder = Page::whereNull('parent_page')->max('order') ?? 0;
        }
        $validated['order'] = $validated['menu_order'] ?? ($highestOrder + 1);

        Page::create($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'source_code' => 'nullable',
            'slug' => 'required|unique:pages,slug,' . $page->id,
            'is_published' => 'required|in:0,1',
            'parent_page' => 'nullable|string',
            'menu_order' => 'nullable|integer',
            'selected_media_urls' => 'nullable|string',
            'old_parent_name' => 'nullable|string'
        ]);

        // Update parent_page name for all related pages if it was changed
        if (!empty($validated['old_parent_name']) && $validated['old_parent_name'] !== $validated['parent_page']) {
            Page::where('parent_page', $validated['old_parent_name'])
                ->update(['parent_page' => $validated['parent_page']]);
        }

        // If slug is changed, ensure it's unique
        if ($validated['slug'] !== $page->slug) {
            $baseSlug = $validated['slug'];
            $counter = 1;
            while (Page::where('slug', $validated['slug'])->where('id', '!=', $page->id)->exists()) {
                $validated['slug'] = $baseSlug . '-' . $counter++;
            }
        }

        $validated['is_published'] = (int)$validated['is_published'];

        // Handle selected media URLs
        if ($request->filled('selected_media_urls')) {
            $mediaUrls = json_decode($request->selected_media_urls, true);
            if (is_array($mediaUrls)) {
                $validated['images'] = array_map(function($url) {
                    return str_replace('/storage/', '', parse_url($url, PHP_URL_PATH));
                }, $mediaUrls);
            }
        }

        // Handle direct file upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $validated['images'] = $validated['images'] ?? [];
            $validated['images'][] = str_replace('public/', '', $path);
        }

        $page->update($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully.');
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.show', compact('page'));
    }
}
