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
        Schema::create('ClubXpersona', function (Blueprint $table) {
            $table->foreignId('club_id')->references('id')->on('Club');
            $table->foreignId('persona_id')->references('id')->on('Persona');
            $table->date('fechaIngreso');
            $table->date('fechaRetiro')->nullable();
            $table->boolean('activo');
            $table->string('detalles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Club_xconquistador');
    }
};
