<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liceos', function (Blueprint $table) {
            $table->id();
            $table->string('codigoplantel');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('municipio');
            $table->string('distritofederal');
            $table->string('zonaeducativa');
            $table->string('director');
            $table->string('ceduladirector');
            $table->timestamps();
  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liceos');
    }
};
