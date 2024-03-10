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

<<<<<<< HEAD
    public function index_by_country($countryID)
    {
        try {
            $data = TransportationPrice::with('country')->with('transportation')->where('country_id', $countryID)->get();
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
=======
   
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransportationPriceRequest $request)
    {
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = TransportationPrice::create($input);
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $added= TransportationPrice::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
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
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = $transportationPrice->update($input);
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $updated= $transportationPrice->update($data);
         return $this->create_response(true, 'ok', $updated, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransportationPrice $transportationPrice)
    {
<<<<<<< HEAD
        try {
            $data = $transportationPrice->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        
        $deleted= $transportationPrice->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}
