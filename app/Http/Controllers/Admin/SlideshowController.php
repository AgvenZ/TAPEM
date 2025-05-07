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
            'image' => $request->has('selected_media_urls') ? 'nullable' : 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'selected_media_urls' => $request->hasFile('image') ? 'nullable' : 'required|json',
            'order' => 'nullable|integer|min:0',
            'active' => 'boolean'
        ]);
        
        // Validasi tambahan untuk mencegah backdoor pada file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Pastikan file adalah gambar yang valid
            if (!in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'])) {
                return redirect()->back()->withErrors(['image' => 'File harus berupa gambar (jpeg, png, jpg, gif).'])->withInput();
            }
            
            // Periksa ekstensi file
            $extension = strtolower($file->getClientOriginalExtension());
            if (!in_array($extension, ['jpeg', 'jpg', 'png', 'gif'])) {
                return redirect()->back()->withErrors(['image' => 'Ekstensi file tidak diizinkan.'])->withInput();
            }
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slideshows', 'public');
        } else {
            $selectedUrls = json_decode($request->selected_media_urls, true);
            $imagePath = str_replace('/storage/', '', $selectedUrls[0]);
        }

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
            'image' => $request->has('selected_media_urls') ? 'nullable' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'selected_media_urls' => $request->hasFile('image') ? 'nullable' : 'nullable|json',
            'order' => 'nullable|integer|min:0',
            'active' => 'boolean'
        ]);
        
        // Validasi tambahan untuk mencegah backdoor pada file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Pastikan file adalah gambar yang valid
            if (!in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'])) {
                return redirect()->back()->withErrors(['image' => 'File harus berupa gambar (jpeg, png, jpg, gif).'])->withInput();
            }
            
            // Periksa ekstensi file
            $extension = strtolower($file->getClientOriginalExtension());
            if (!in_array($extension, ['jpeg', 'jpg', 'png', 'gif'])) {
                return redirect()->back()->withErrors(['image' => 'Ekstensi file tidak diizinkan.'])->withInput();
            }
        }

        $data = [
            'title' => $request->title,
            'order' => $request->order ?? $slideshow->order,
            'active' => $request->has('active') ? $request->boolean('active') : false
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($slideshow->image_path);
            $data['image_path'] = $request->file('image')->store('slideshows', 'public');
        } elseif ($request->filled('selected_media_urls')) {
            Storage::disk('public')->delete($slideshow->image_path);
            $selectedUrls = json_decode($request->selected_media_urls, true);
            $imagePath = str_replace('/storage/', '', $selectedUrls[0]);
            $data['image_path'] = $imagePath;
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