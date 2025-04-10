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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->unsignedBigInteger('wisataName'); // id_wisata
            $table->string('photoGaleri');
            $table->string('caption')->nullable();
            $table->string('name_uploader');
            $table->timestamps();
    
            $table->foreign('wisataName')->references('id_wisata')->on('wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};