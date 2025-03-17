<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_path',
        'is_published',
        'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (! $news->slug) {
                $news->slug = Str::slug($news->title);
            }

            if (! $news->published_at && $news->is_published) {
                $news->published_at = now();
            }
        });
    }
}