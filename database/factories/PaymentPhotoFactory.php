<?php

namespace Database\Factories;

use App\Models\HotelReservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentPhoto>
 */
class PaymentPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' =>fake()->imageUrl(),
            'hotel_reservation_id' => HotelReservation::all()->random()->id,
        ];
    }
}
