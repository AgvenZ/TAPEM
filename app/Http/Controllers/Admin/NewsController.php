<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'selected_media_urls' => 'nullable|string',
            'is_published' => 'boolean'
        ]);

        // Generate unique slug
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;

        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $validated['slug'] = $slug;
        // Set is_published to false by default unless checkbox is checked
        $validated['is_published'] = false;
        if ($request->has('is_published')) {
            $validated['is_published'] = true;
        }

        // Handle image uploads and media library selections
        $images = [];
        if ($request->hasFile('image')) {
            $images[] = $request->file('image')->store('news', 'public');
        }
        if ($request->filled('selected_media_urls')) {
            $selectedUrls = json_decode($request->selected_media_urls, true);
            if (is_array($selectedUrls)) {
                foreach ($selectedUrls as $url) {
                    $path = str_replace('/storage/', '', $url);
                    if (!in_array($path, $images)) {
                        $images[] = $path;
                    }
                }
            }
        }
        if (!empty($images)) {
            $validated['images'] = json_encode($images);
        }

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => 'required',
            'image' => 'nullable|image|max:2048',
            'selected_media_url' => 'nullable|string',
            'is_published' => 'required|in:0,1'
        ]);
    
        // Convert is_published to boolean or integer as needed by your database
        $validated['is_published'] = (int)$validated['is_published'];

        // Handle image uploads and media library selections
        $images = [];
        if ($request->hasFile('image')) {
            $images[] = $request->file('image')->store('news', 'public');
        }
        if ($request->filled('selected_media_urls')) {
            $selectedUrls = json_decode($request->selected_media_urls, true);
            if (is_array($selectedUrls)) {
                foreach ($selectedUrls as $url) {
                    $path = str_replace('/storage/', '', $url);
                    if (!in_array($path, $images)) {
                        $images[] = $path;
                    }
                }
            }
        }
        if (!empty($images)) {
            $validated['images'] = json_encode($images);
        }
    
        $news->update($validated);
    
        return redirect()->route('admin.news.index')
            ->with('success', 'news updated successfully.');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'news deleted successfully.');
    }
}