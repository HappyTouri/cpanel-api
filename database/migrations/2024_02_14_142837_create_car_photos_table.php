<?php

use App\Models\Driver;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
<<<<<<< HEAD
            $table->foreignIdFor(Driver::class)->constrained()->onDelete("cascade");
=======
            $table->foreignIdFor(Driver::class)->constrained()->cascadeOnDelete();
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_photos');
    }
};
