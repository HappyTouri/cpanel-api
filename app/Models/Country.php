<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'country_icon'];

    function cites()
    {
        return $this->hasMany(City::class, 'country_id');
    }
    function transportation_prices()
    {
        return $this->hasMany(TransportationPrice::class);
    }
    function drivers(){
        return $this->hasMany(Driver::class);
    }
}

