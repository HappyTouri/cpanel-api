<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    public function index()
    {
        try {
            // $data = Country::all();
            $data = Country::with('cites')->get();
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }


    public function store(StoreCountryRequest $request)
    {
        try {
            $input = $request->all();
            $data = Country::create($input);
            return $this->create_response(true, 'ok', $data, 201);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

    public function update(UpdateCountryRequest $request, Country $country)
    {
        try {
            $data = $request->validated();
            $country->update($data);
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

    public function destroy(Country $country)
    {
        try {
            $data = $country->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }
}
