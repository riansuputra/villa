<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    protected $fillable = [

        'name',

        'about',

        'contact',

        'phone',

        'email',

        'address',

        'map_url',

        'hero_title',

        'hero_subtitle',

        'hero_image',

        'explore_title',

        'explore_description',

        'explore_background',

        'cta_title',

        'cta_subtitle',

    ];
}
