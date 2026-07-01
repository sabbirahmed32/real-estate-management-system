<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agents extends Model
{
     protected $fillable = [
        'image',
        'agents_type',
        'name',
        'email',
        'phone',
        'properties_number',
        'gender',
        'property_status',
        'property_price',
        'max_rooms',
        'beds',
        'baths',
        'street_address',
        'state',
        'country',
        'city',
        'zip_code',
        'address',
    ];
}
