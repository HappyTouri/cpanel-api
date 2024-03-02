<?php

namespace App\Http\Controllers;

use App\Models\TransportationPrice;
use App\Http\Requests\StoreTransportationPriceRequest;
use App\Http\Requests\UpdateTransportationPriceRequest;
use App\Models\Country;

class TransportationPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransportationPriceRequest $request)
    {
        $data= $request->validated();
        $added= TransportationPrice::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TransportationPrice $transportationPrice)
    {
        //
    } public function transportatinPriceByCountry( $country)
    {
        
        $country= Country::where('country',$country)->first();
      
       
        $transportationPrice = TransportationPrice::with('country')->with('transportation')->where('country_id', '=', $country->id)
        ->get();
       
            
        return $this->create_response(true, 'ok', $transportationPrice, 200);
        
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransportationPriceRequest $request, TransportationPrice $transportationPrice)
    {
        $data= $request->validated();
        $updated= $transportationPrice->update($data);
         return $this->create_response(true, 'ok', $updated, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransportationPrice $transportationPrice)
    {
        
        $deleted= $transportationPrice->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
    }
}
