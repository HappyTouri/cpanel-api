<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportationPrice extends Model
{

    protected $fillable = [
        'price',
        'country_id',
        'transportation_id'
    ];
    use HasFactory;
<<<<<<< HEAD
=======
    protected $fillable  = [
        'country_id',
        'transportation_id',
        'price'
    ];
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    function transportation()
    {
        return $this->belongsTo(Transportation::class);
    }
    function country()
    {
        return $this->belongsTo(Country::class);
    }
}
