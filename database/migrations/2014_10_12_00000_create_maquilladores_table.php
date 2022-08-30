<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquilladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquilladores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido')->nullable();//nullable es para permitir campos vacios
            $table->string('telefono')->nullable();
            $table->string('cedula')->nullable();
            $table->string('correo')->nullable();
            $table->unsignedBigInteger('creador_usuario_id')->nullable();
            $table->foreign('creador_usuario_id')->references('id')->on('users')->onDelete('set null');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquilladores');
    }
}
