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
        try {
            $data =RoomCategory::get();
    
            return $this->create_response(true, 'ok', $data);
    
        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomCategoryRequest $request)
    {
        $data= $request->validated();
        $added= RoomCategory::create($data);
      
        return $this->create_response(true, 'ok', $added, 201);
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
        $data= $request->validated();
       $updated= $roomCategory->update($data);
        return $this->create_response(true, 'ok', $updated, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomCategory $roomCategory)
    {
        
        $deleted= $roomCategory->delete();
        return $this->create_response(true, 'ok', $deleted, 200);
    }
}
