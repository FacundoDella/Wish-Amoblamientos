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
        Schema::create('feplactableros', function (Blueprint $table) {
            $table->id();
            $table->string('titleItem');
            $table->string('imagenItem', 2048);
            $table->unsignedBigInteger('feplacLinea_id');
            $table->foreign('feplacLinea_id')->references('id')->on('feplacLineas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feplactableros');
    }
};

