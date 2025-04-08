<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.index', compact('pages'));
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('admin.pages.show', compact('page'));
    }
}