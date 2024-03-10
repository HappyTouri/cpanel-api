<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    protected $fillable = [
        'country',
        'country_icon'
    ];
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
<<<<<<< HEAD
    function drivers()
    {
        return $this->hasMany(Driver::class);
=======
    function offers(){
        return $this->hasMany(Offer::class);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}

