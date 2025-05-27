<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(12);
        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255'
        ]);

        $file = $request->file('file');
        $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/media', $fileName);

        Media::create([
            'name' => $request->name,
            'file_name' => $fileName,
            'mime_type' => $file->getMimeType(),
            'path' => $path,
            'size' => $file->getSize()
        ]);

        return redirect()->route('admin.media.index')
            ->with('success', 'Media uploaded successfully');
    }

    public function destroy(Media $media)
    {
        $media->delete();
        return redirect()->route('admin.media.index')
            ->with('success', 'Media deleted successfully');
    }

    public function select()
    {
        $media = Media::latest()->paginate(12);
        return view('admin.media.select', compact('media'));
    }
}
