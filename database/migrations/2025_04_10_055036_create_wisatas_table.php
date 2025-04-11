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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id('id_wisata'); // primary key
            $table->char('name', 100);
            $table->text('desc');
            $table->integer('htm');
            $table->string('imageWisata')->nullable();
            $table->char('whatsapp', 20)->nullable();
            $table->char('maps', 255)->nullable();
            $table->time('timeOpen')->nullable();
            $table->time('timeClose')->nullable();
            $table->text('mapsView')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};