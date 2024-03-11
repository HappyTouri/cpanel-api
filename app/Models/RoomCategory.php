<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $fillable = [
        'room_category',
    ];
    use HasFactory;
    function hotel_prices()
    {
        return $this->hasMany(HotelPrice::class);
    }
}
