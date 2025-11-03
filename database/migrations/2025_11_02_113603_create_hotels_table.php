<?php

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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('hotel_id');
            $table->unsignedBigInteger('business_id'); // FK ke businesses
            $table->string('name');
            $table->string('type');
            $table->decimal('price_per_night', 15, 2);
            $table->boolean('ketersediaan')->default(true);
            $table->timestamps();

            $table->foreign('business_id')->references('business_id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
