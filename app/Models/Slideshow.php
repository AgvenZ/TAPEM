<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    protected $fillable = [
        'title',
        'image_path',
        'order',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
        'order' => 'integer'
    ];
}