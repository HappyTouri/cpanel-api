<?php

namespace App\Http\Controllers;

use App\Models\HotelRoomCategories;
use App\Http\Requests\StoreHotelRoomCategoriesRequest;
use App\Http\Requests\UpdateHotelRoomCategoriesRequest;

class HotelRoomCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreHotelRoomCategoriesRequest $request)
    {
        try {
            $input = $request->all();

            $accommodationId = $input['accommodation_id'] ?? null;
            $roomCategory = $input['room_category_id'] ?? null;



            // Check if any records exist with the provided accommodation ID
            HotelRoomCategories::where('accommodation_id', $accommodationId)->delete();

            // Process each hotel room category in the request
            foreach ($roomCategory as $categoryData) {
                $data = new HotelRoomCategories();
                $data->accommodation_id = $accommodationId;
                $data->room_category_id = $categoryData['room_category_id']; // Assuming 'room_category_id' is present in each category data
                // Additional fields if any
                $data->save();
            }

            return $this->create_response(true, 'ok', $input);

        } catch (\Exception $e) {
            return $this->create_response(false, $e->getMessage(), 404);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(HotelRoomCategories $hotelRoomCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelRoomCategories $hotelRoomCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelRoomCategoriesRequest $request, HotelRoomCategories $hotelRoomCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelRoomCategories $hotelRoomCategories)
    {
        //
    }
}
