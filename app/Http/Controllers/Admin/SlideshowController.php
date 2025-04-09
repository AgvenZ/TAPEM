<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideshowController extends Controller
{
    public function index()
    {
        $slideshows = Slideshow::orderBy('order')->get();
        return view('admin.slideshows.index', compact('slideshows'));
    }

    public function create()
    {
        return view('admin.slideshows.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'active' => 'boolean'
        ]);

        $imagePath = $request->file('image')->store('slideshows', 'public');

        Slideshow::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'order' => $request->order ?? 0,
            'active' => $request->boolean('active', true)
        ]);

        return redirect()->route('admin.slideshows.index')
            ->with('success', 'Slideshow created successfully.')
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

    public function edit(Slideshow $slideshow)
    {
        return view('admin.slideshows.edit', compact('slideshow'));
    }

    public function update(Request $request, Slideshow $slideshow)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'active' => 'boolean'
        ]);

        $data = [
            'title' => $request->title,
            'order' => $request->order ?? $slideshow->order,
            'active' => $request->has('active') ? $request->boolean('active') : false
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slideshow->image_path);
            $data['image_path'] = $request->file('image')->store('slideshows', 'public');
        }

        $slideshow->update($data);

        return redirect()->route('admin.slideshows.index')
            ->with('success', 'Slideshow updated successfully.');
    }

    public function destroy(Slideshow $slideshow)
    {
        Storage::disk('public')->delete($slideshow->image_path);
        $slideshow->delete();

        return redirect()->route('admin.slideshows.index')
            ->with('success', 'Slideshow deleted successfully.');
    }
}