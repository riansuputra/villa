<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [

        'name',

        'icon',

        'sort_order',

        'is_active',

    ];
}
