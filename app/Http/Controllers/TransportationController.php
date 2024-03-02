<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use App\Http\Requests\StoreTransportationRequest;
use App\Http\Requests\UpdateTransportationRequest;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Transportation::with('drivers')->with('transportation_prices')->get();
    
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransportationRequest $request)
    {
        $data= $request->validated();
        $added= Transportation::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transportation $transportation)
    {
        try {
            $data =  $transportation;
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransportationRequest $request, Transportation $transportation)
    {
        $data= $request->validated();
        $updated= $transportation->update($data);
         return $this->create_response(true, 'ok', $updated, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportation $transportation)
    {
        
        $deleted= $transportation->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
    }
}
