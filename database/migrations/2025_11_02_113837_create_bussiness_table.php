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
        Schema::create('business', function (Blueprint $table) {
            $table->id('business_id');
            $table->unsignedBigInteger('owner_id'); // FK ke users
            $table->unsignedBigInteger('type_id');  // FK ke business_types
            $table->string('name');
            $table->text('address');
            $table->text('description')->nullable();
            $table->decimal('revenue', 15, 2)->default(0);
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('owner_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')->references('type_id')->on('business_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness');
    }
};
