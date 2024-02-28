<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    function accommodation_photos(){
        return $this->hasMany(AccommodationPhoto::class);
    }
    function hotel_seasons(){
        return $this->hasMany(HotelSeason::class);
    }
    function apartment_season_prices(){
        return $this->hasMany(ApartmentSeasonPrice::class);
    }
    function tour_details(){
        return $this->hasMany(TourDetail::class);
    }
    function city(){
        return $this->belongsTo(City::class);
    }
    function accommodation_type(){
        return $this->belongsTo(AccommodationType::class);
    }
}
