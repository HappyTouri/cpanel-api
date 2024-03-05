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

    function cities()
    {
        return $this->hasMany(City::class, );
    }
    function transportation_prices()
    {
        return $this->hasMany(TransportationPrice::class);
    }
    function offers(){
        return $this->hasMany(Offer::class);
    }
}

