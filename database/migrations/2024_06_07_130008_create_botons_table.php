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
        Schema::create('botons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imagen_id')->constrained('imagenes')->onDelete('cascade');
            $table->string('contenido');
            $table->integer('posicion_x');
            $table->integer('posicion_y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botons');
    }
};
