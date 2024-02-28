<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Http\Requests\StoreAccommodationRequest;
use App\Http\Requests\UpdateAccommodationRequest;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  Accommodation::all();
      
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
    public function store(StoreAccommodationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accommodation $accommodation)
    {
      return $accommodation;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accommodation $accommodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccommodationRequest $request, Accommodation $accommodation)
    {
                  $accommodation->update($request->all());
                  return $accommodation;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accommodation $accommodation)
    {
          $accommodation->delete();
          return $accommodation;
    }
}
