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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->string('user_name');
            $table->date('date');
            $table->time('time');
            $table->integer('party_size');

            $table->boolean('confirmed')->default(false);

            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurants');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};