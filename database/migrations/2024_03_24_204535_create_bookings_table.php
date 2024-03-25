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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Plane');
            $table->string('TicketNumber');
            $table->string('Price');
            $table->string('Depart');
            $table->string('Destination');
            $table->string('Name');
            $table->string('Email');
            $table->string('Date');
            $table->string('Time');
            $table->string('Email');
            $table->softDeletes();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};