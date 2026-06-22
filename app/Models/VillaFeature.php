<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillaFeature extends Model
{
    protected $fillable = [

        'title',

        'value',

        'image',

        'sort_order',

    ];
}
