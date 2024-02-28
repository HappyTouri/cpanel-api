<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentDetail extends Model
{
    use HasFactory;
    function accommodation(){
        return $this->hasOne(Accommodation::class);
    }
}
