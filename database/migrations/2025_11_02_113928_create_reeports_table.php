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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->unsignedBigInteger('business_id'); // FK ke businesses
            $table->decimal('total_income', 15, 2);
            $table->integer('total_transaksi');
            $table->integer('month');
            $table->integer('year');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('business_id')->references('business_id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reeports');
    }
};
