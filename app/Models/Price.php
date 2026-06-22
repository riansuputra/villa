<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [

        'price_day',

        'price_week',

        'price_month',

    ];
}
