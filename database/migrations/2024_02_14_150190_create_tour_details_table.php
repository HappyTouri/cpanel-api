<?php

use App\Models\Accommodation;
use App\Models\Offer;
use App\Models\Tour;
use App\Models\TourGuide;
use App\Models\TourTitle;
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
        Schema::create('tour_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Offer::class)->constrained()->cascadeOnDelete();
            $table->date('date');
            $table->integer('number_of_room');
            $table->integer('extra_bed');
            $table->foreignIdFor(TourTitle::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tour::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Accommodation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TourGuide::class)->constrained()->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_details');
    }
};
