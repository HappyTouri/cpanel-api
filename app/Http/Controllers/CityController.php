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

    }


    public function index_by_country($countryID)
    {
        try {
            // $data = City::where('country_id', $countryID)->get();
            $data = City::with('country')->where('country_id', $countryID)->get();
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        try {
            $input = $request->all();
            $data = City::create($input);
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
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
<<<<<<< HEAD

=======
        
        $country= Country::where('country',$country)->first();
      
       
        $city = City::with('country')->where('country_id', '=', $country->id)
        ->get();
       
            
        return $this->create_response(true, 'ok', $city, 200);
        
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = $city->update($input);
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        
        $data= $request->validated();
       $updated= $city->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
<<<<<<< HEAD
        try {
            $data = $city->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $deleted= $city->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}
