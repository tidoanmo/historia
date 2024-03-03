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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->text('ea')->nullable();
            $table->text('app')->nullable();
            $table->text('apf')->nullable();
            $table->float('peso')->nullable();
            $table->float('talla')->nullable();
            $table->float('imc')->nullable();
            $table->float('temperatura')->nullable();
            $table->string('ta')->nullable();
            $table->string('fc')->nullable();
            $table->string('fr')->nullable();
            $table->text('cabeza')->nullable();
            $table->text('torax')->nullable();
            $table->text('abdomen')->nullable();
            $table->text('gluteos')->nullable();
            $table->text('otros')->nullable();
            $table->text('laboratorio')->nullable();
            $table->string('imagen')->nullable();
            $table->text('diagnostico')->nullable();
            $table->text('tratamiento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
