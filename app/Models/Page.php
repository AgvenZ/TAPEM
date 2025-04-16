<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'is_published',
        'image_path',
        'images',
        'parent_page',
        'order'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'images' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (! $page->slug) {
                $page->slug = Str::slug($page->title);
            }
        });
    }
}