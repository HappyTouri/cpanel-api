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
<<<<<<< HEAD
            $data = transportation::get();
            return $this->create_response(true, 'ok', $data);
=======
            $data = Transportation::with('drivers')->with('transportation_prices')->get();
    
            return $this->create_response(true, 'ok', $data);
    
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
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
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = transportation::create($input);
            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $added= Transportation::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
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
<<<<<<< HEAD
        try {
            $data = $request->validated();
            $transportation->update($data);
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $updated= $transportation->update($data);
         return $this->create_response(true, 'ok', $updated, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportation $transportation)
    {
<<<<<<< HEAD
        try {
            $data = $transportation->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        
        $deleted= $transportation->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}
