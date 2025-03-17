<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'pages' => [
                'total' => Page::count(),
                'published' => Page::where('is_published', true)->count(),
                'draft' => Page::where('is_published', false)->count()
            ],
            'news' => [
                'total' => News::count(),
                'published' => News::where('is_published', true)->count(),
                'draft' => News::where('is_published', false)->count()
            ]
        ];

        return view('admin.dashboard', compact('stats'));
    }
}