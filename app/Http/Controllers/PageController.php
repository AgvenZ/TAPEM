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

    public function preview(Page $page)
    {
        // Only allow admin to preview pages
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }

        // If the page has source code, use it directly
        if (!empty($page->source_code)) {
            return response($page->source_code)->header('Content-Type', 'text/html');
        }
        // Otherwise use the standard view
        return view('admin.pages.show', compact('page'));
    }

    public function show($slug)
    {
        // First try to find a dynamic page
        $query = Page::where('slug', $slug);
        
        // Only show draft pages to authenticated admin users
        if (!auth()->check() || !auth()->user()->is_admin) {
            $query->where('is_published', true);
        }
        
        $page = $query->first();

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
