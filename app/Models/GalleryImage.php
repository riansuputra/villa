<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [

        'title',

        'image',

        'is_featured',

        'sort_order',

        'is_active',

    ];
}
