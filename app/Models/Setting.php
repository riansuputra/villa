<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

        'default_currency',

        'default_language',

        'booking_whatsapp',

        'instagram',

        'facebook',

        'tiktok',

        'youtube',

        'copyright',

        'privacy_policy',

    ];
}
