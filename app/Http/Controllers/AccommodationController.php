<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\AccommodationPhoto;
use App\Models\ApartmentDetail;
use App\Http\Requests\StoreAccommodationRequest;
use App\Http\Requests\UpdateAccommodationRequest;


class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }


    public function index_by_country($countryID)
    {

        try {
            $data = Accommodation::with('city.country', 'accommodation_photos', 'hotel_seasons', 'accommodation_type', 'apartment_season_prices', 'hotel_seasons', 'hotel_room_categories.room_category')->whereHas('city', function ($query) use ($countryID) {
                $query->where('country_id', $countryID);
            })->get();
            // dd($data);
            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }

        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //sdsdsd
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccommodationRequest $request)
    {
        try {
            if ($request->hasFile("cover_photo")) {
                $files = $request->file("cover_photo");
                foreach ($files as $file) {
                    $imageCover = time() . '_' . $file->getClientOriginalName();
                    $file->move(\public_path("HotelCover/"), $imageCover);
                }

                if ($request->hasFile("price_list_PDF")) {
                    $files = $request->file("price_list_PDF");
                    foreach ($files as $file) {
                        $imagePriceList = time() . '_' . $file->getClientOriginalName();
                        $file->move(\public_path("PriceList/"), $imagePriceList);
                    }
                }

                $data = new Accommodation([
                    'name' => $request->name,
                    'rate' => $request->rate,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'email' => $request->email,
                    'price_list_PDF' => "$imagePriceList",
                    'share' => 0,
                    'note' => $request->note,
                    'cover_photo' => $imageCover,
                    'video_link' => $request->video_link,
                    'city_id' => $request->city_id,
                    'accommodation_type_id' => $request->accommodation_type_id,
                ]);

                $data->save();

                if ($request->accommodation_type_id !== "1") {
                    $apartment = new ApartmentDetail([
                        'accommodation_id' => $data->id,
                        'number_of_rooms' => $request->number_of_rooms,
                        'number_of_peoples' => $request->number_of_peoples,
                    ]);
                    // $apartment->save();
                    $data->apartment_details()->save($apartment);
                }

                if ($request->hasFile("images")) {
                    $files = $request->file("images");
                    foreach ($files as $file) {
                        $imageName = time() . '_' . $file->getClientOriginalName();
                        $request['accommodation_id'] = $data->id;
                        $request['photo'] = $imageName;
                        $file->move(\public_path("/HotelPhotos"), $imageName);
                        AccommodationPhoto::create($request->all());
                    }
                }

            }



            return $this->create_response(true, 'ok', $request);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Accommodation $accommodation)
    {
        try {
            $data = Accommodation::with('city.country', 'accommodation_photos', 'hotel_seasons', 'accommodation_type', 'apartment_season_prices', 'hotel_seasons', 'hotel_room_categories.room_category')
                ->findOrFail($accommodation->id);
            return $this->create_response(true, 'ok', $data);

        } catch (\Exception $e) {
            return $this->create_response(false, 'Something went wrong, please reload the page and try again', 404);
        }
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
        // $accommodation->update($request->all());
        // return $accommodation;
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
