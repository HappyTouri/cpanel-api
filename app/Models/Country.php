<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country',
        'country_icon'
    ];
    use HasFactory;
    function cites()
    {
        return $this->hasMany(City::class);
    }
    function transportation_prices()
    {
        return $this->hasMany(TransportationPrice::class);
    }
    function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}

