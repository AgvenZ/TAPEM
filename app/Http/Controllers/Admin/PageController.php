<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('order', 'desc')->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'is_published' => 'boolean',
            'images' => 'nullable|array'
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        // Convert is_published to integer
        $validated['is_published'] = (int)$validated['is_published'];
        
        if ($request->has('images')) {
            $validated['images'] = $request->images;
        }

        // Set the order value to be higher than the highest existing order
        $highestOrder = Page::max('order') ?? 0;
        $validated['order'] = $highestOrder + 1;

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
            'slug' => 'required',
            'is_published' => 'required|in:0,1',
            'images' => 'nullable|array'
        ]);
    
        // Convert is_published to boolean or integer as needed by your database
        $validated['is_published'] = (int)$validated['is_published'];
        
        if ($request->has('images')) {
            $validated['images'] = $request->images;
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