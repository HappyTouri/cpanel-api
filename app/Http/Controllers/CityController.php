<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
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
    public function store(StoreCityRequest $request)
    {
        $data= $request->validated();
        $added= City::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }
    public function cityByCountry( $country)
    {
        
        $country= Country::where('country',$country)->first();
      
       
        $city = City::with('country')->where('country_id', '=', $country->id)
        ->get();
       
            
        return $this->create_response(true, 'ok', $city, 200);
        
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        
        $data= $request->validated();
       $updated= $city->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $deleted= $city->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
    }
}
