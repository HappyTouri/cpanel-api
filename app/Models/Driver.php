<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    function car_photos(){
        return $this->hasMany(CarPhoto::class);
    }
    function reservations(){
        return $this->hasMany(Reservation::class);
    }
    function city(){
        return $this->belongsTo(City::class);
    }
    function transportation(){
        return $this->belongsTo(Transportation::class);
    }
}
