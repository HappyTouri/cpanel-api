<?php

use App\Models\Tour;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tour_photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
<<<<<<< HEAD
            $table->foreignIdFor(Tour::class)->constrained()->onDelete("cascade");
=======
            $table->foreignIdFor(Tour::class)->constrained()->cascadeOnDelete(); 
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_photos');
    }
};
