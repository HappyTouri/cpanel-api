<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourTitle extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_EN' ,
        'title_AR' ,
        'title_RU'
    ];
    function tour_details(){
        return $this->hasMany(TourDetail::class);
    }
}
