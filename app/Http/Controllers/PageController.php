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
         // First try to find a dynamic page
         $page = Page::where('slug', $slug)
             ->where('is_published', true)
             ->first();

        if ($page) {
            // If the page has source code, use it directly
            if (!empty($page->source_code)) {
                return response($page->source_code)->header('Content-Type', 'text/html');
            }
            // Otherwise use the standard view
            return view('admin.pages.show', compact('page'));
        }

        // If no dynamic page found, check if it's a static page
        if (view()->exists($slug)) {
            return view($slug);
        }

        abort(404);
    }
}
