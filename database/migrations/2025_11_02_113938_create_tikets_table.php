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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id('ticket_id');
            $table->unsignedBigInteger('business_id'); // FK ke businesses
            $table->string('event_name');
            $table->dateTime('date');
            $table->string('location');
            $table->decimal('price', 15, 2);
            $table->integer('available');
            $table->timestamps();

            $table->foreign('business_id')->references('business_id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
