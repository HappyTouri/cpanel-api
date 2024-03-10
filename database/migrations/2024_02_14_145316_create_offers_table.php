<?php

use App\Models\Country;
use App\Models\TourStatus;
use App\Models\Transportation;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Country::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TourStatus::class)->constrained()->cascadeOnDelete();
            $table->string('tour_title');
            $table->string('tour_name');
            $table->integer('number_of_days');
            $table->date('from');
            $table->date('till');
            $table->foreignIdFor(Transportation::class)->constrained()->cascadeOnDelete();
            $table->integer('number_of_people');
            $table->integer('transportation_price');
            $table->integer('tour_guide_price');
            $table->integer('hotels_price');
            $table->integer('profit_price');
            $table->integer('tour_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
