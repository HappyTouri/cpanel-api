<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {try {
        $data = country::get();

        return $this->create_response(true, 'ok', $data);

    } catch (\Exception $e) {
        return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
    }
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $data= $request->validated();
        $added= Country::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        try {
            $data =  $country;
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $data= $request->validated();
       $updated= $country->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
         $deleted= $country->delete();
         return $this->create_response(true, 'ok', $deleted, 200);
    }
}
