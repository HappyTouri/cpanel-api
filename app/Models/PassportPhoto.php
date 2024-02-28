<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportPhoto extends Model
{
    use HasFactory;
    function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
