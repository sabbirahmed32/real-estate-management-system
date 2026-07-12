<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
        protected $fillable = [
            
        'image',
        'agent_id',
        'title',
        'slug',
        'property_type',
        'property_status',
        'price',
        'security_deposit',
        'available_from',
        'max_rooms',
        'beds',
        'baths',
        'area',
        'parking',
        'garage',
        'street_address',
        'state',
        'country',
        'city',
        'zip_code',
        'address',
        'interior_features',
        'amenities',
    ];

        protected $casts = [

        'interior_features'=>'array',
        'amenities'=>'array',
        'available_from'=>'date',
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}
