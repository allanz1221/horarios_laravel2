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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('base');
            $table->string('fecha_nacimiento');
            $table->string('categoria');
            $table->string('comision');
            $table->string('desc_comision');
            $table->string('perfil');
            $table->string('fecha_contrato_inicio');
            $table->string('fecha_contrato_fin');
            $table->string('fecha_horario');
            $table->unsignedBigInteger('pe_id');
            $table->foreign('pe_id')->references('id')->on('pes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
