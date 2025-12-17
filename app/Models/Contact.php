<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'email',
        'phone',
        'address',
        'google_maps_link',
        'is_primary',
    ];
}
