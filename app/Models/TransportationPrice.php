<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportationPrice extends Model
{
    use HasFactory;
    function transportation(){
        return $this->belongsTo(Transportation::class);
    }
    function country(){
        return $this->belongsTo(Country::class);
    }
}
