<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Camion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->bigIncrements('id_camion');
            $table->string('placa');
            $table->string('codig_interno');
            $table->unsignedBigInteger('id_transporte');
            $table->string('color');
            $table->date('modelo');
            $table->string('capacidad_toneladas');
            $table->timestamps();
            $table->unsignedBigInteger('id_marca');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
