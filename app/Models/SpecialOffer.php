<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable = [

        'title',

        'description',

        'discount',

        'start_date',

        'end_date',

        'is_active',

    ];
}
