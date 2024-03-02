<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
    protected $fillable=[
        'type'
    ];
    function transportation_prices(){
        return $this->hasMany(TransportationPrice::class);
    }
    function drivers(){
        return $this->hasMany(Driver::class);
    }
}
