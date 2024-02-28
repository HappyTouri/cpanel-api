<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    function tour_photos(){
        return $this->hasMany(TourPhoto::class);
    }
    function tour_details(){
        return $this->hasMany(TourDetail::class);
    }
    function city(){
        return $this->belongsTo(City::class);
    }
}
