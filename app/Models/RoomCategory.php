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
<<<<<<< HEAD
    function hotel_prices()
    {
=======
    protected $fillable=[
        'room_category'
    ];
    function hotel_prices(){
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        return $this->hasMany(HotelPrice::class);
    }
}
