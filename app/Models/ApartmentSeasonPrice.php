<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentSeasonPrice extends Model
{
    use HasFactory;
    function  accommodation(){
        return $this->belongsTo(Accommodation::class);
    }
}
