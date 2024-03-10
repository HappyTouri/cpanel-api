<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $fillable = [
        'type',
    ];
    use HasFactory;
<<<<<<< HEAD
    function transportation_prices()
    {
=======
    protected $fillable=[
        'type'
    ];
    function transportation_prices(){
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        return $this->hasMany(TransportationPrice::class);
    }
    function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
