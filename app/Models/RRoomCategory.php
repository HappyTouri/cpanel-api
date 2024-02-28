<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RRoomCategory extends Model
{
    use HasFactory;
    function room_category(){
        return $this->belongsTo(RoomCategory::class);
    }
    function tour_detail(){
        return $this->belongsTo(TourDetail::class);
    }
}
