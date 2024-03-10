<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city',
        'country_id'
    ];
    use HasFactory;
<<<<<<< HEAD
    function tours()
    {
=======

    protected $fillable = [
        'city',
         'country_id'
        ];
    function tours(){
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        return $this->hasMany(Tour::class);
    }
    function drivers()
    {
        return $this->hasMany(Driver::class);
    }
    function tourGuides()
    {
        return $this->hasMany(TourGuide::class);
    }
    function accommodations()
    {
        return $this->hasMany(Accommodation::class);
    }
<<<<<<< HEAD
    function country()
    {
        return $this->belongsTo(Country::class);
=======
    function country(){
        return $this->belongsTo(Country::class,'country_id');
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}
