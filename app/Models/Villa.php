<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'whatsapp',
        'map_url',
    ];
}
