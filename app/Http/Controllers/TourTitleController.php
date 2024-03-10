<?php

namespace App\Http\Controllers;

use App\Models\TourTitle;
use App\Http\Requests\StoreTourTitleRequest;
use App\Http\Requests\UpdateTourTitleRequest;

class TourTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
<<<<<<< HEAD
            $data = TourTitle::all();
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }

=======
            $data = TourTitle::get();
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourTitleRequest $request)
    {
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = TourTitle::create($input);
            return $this->create_response(true, 'ok', $data, 201);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $added= TourTitle::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Display the specified resource.
     */
    public function show(TourTitle $tourTitle)
    {
        try {
            $data =  $tourTitle;
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }  
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTourTitleRequest $request, TourTitle $tourTitle)
    {
<<<<<<< HEAD
        try {
            $data = $request->validated();
            $tourTitle->update($data);
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
       $updated= $tourTitle->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourTitle $tourTitle)
    {
<<<<<<< HEAD
        try {
            $data = $tourTitle->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }
=======
        $deleted= $tourTitle->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
   }
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
}
