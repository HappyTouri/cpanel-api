<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use App\Http\Requests\StoreRoomCategoryRequest;
use App\Http\Requests\UpdateRoomCategoryRequest;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //room_category
        try {
            $data = RoomCategory::all();
            return $this->create_response(true, 'ok', $data);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }

=======
        try {
            $data =RoomCategory::get();
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomCategoryRequest $request)
    {
<<<<<<< HEAD
        try {
            $input = $request->all();
            $data = RoomCategory::create($input);
            return $this->create_response(true, 'ok', $data, 201);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
        $added= RoomCategory::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomCategory $roomCategory)
    {
        try {
            $data =  $roomCategory;
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomCategoryRequest $request, RoomCategory $roomCategory)
    {
<<<<<<< HEAD
        try {
            $data = $request->validated();
            $roomCategory->update($data);
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        $data= $request->validated();
       $updated= $roomCategory->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomCategory $roomCategory)
    {
<<<<<<< HEAD
        try {
            $data = $roomCategory->delete();
            return $this->create_response(true, 'ok', $data, 201);
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
=======
        
        $deleted= $roomCategory->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
    }
}
