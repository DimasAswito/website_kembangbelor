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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id_event');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('location'); // id_wisata
            $table->string('posterImage')->nullable();
            $table->boolean('isOpen')->default(true);
            $table->dateTime('event_started');
            $table->dateTime('event_ended');
            $table->timestamps();

            $table->foreign('location')->references('id_wisata')->on('wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};