<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    function offer(){
        return $this->hasOne(Offer::class);
    }
    function passport_photos(){
        return $this->hasMany(PassportPhoto::class);
    }
    function airticket_photos(){
        return $this->hasMany(AirTicketPhoto::class);
    }
    function confirmation_photos(){
        return $this->hasMany(ConfirmationPhoto::class);
    }
    function invoice_photos(){
        return $this->hasMany(InvoicePhoto::class);
    }
    function payment_photos(){
        return $this->hasMany(PaymentPhoto::class);
    }
    function driver(){
        return $this->belongsTo(Driver::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
}
