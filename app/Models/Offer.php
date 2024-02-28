<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    function tour_details(){
        return $this->hasMany(TourDetail::class);
    }
    function country(){
        return $this->belongsTo(Country::class);
    }
    function tour_status(){
        return $this->belongsTo(TourStatus::class);
    }
    function transportation(){
        return $this->belongsTo(Transportation::class);
    }
}
