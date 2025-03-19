<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    protected $fillable = [
        'name',
        'file_name',
        'mime_type',
        'path',
        'size'
    ];

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    public function delete()
    {
        Storage::delete($this->path);
        return parent::delete();
    }
}