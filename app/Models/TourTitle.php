<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourTitle extends Model
{

    protected $fillable = [
        'title_EN',
        'title_AR',
        'title_RU',
    ];
    use HasFactory;
<<<<<<< HEAD
    function tour_details()
    {
=======
    protected $fillable=[
        'title_EN' ,
        'title_AR' ,
        'title_RU'
    ];
    function tour_details(){
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        return $this->hasMany(TourDetail::class);
    }
}
