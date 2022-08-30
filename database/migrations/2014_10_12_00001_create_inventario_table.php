<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {

            $table->id();
            $table->string('producto',255); //puede ser el nombre de un articulo o un cosmetico

            $table->unsignedBigInteger('asignado_por_id');
            $table->foreign('asignado_por_id')->references('id')->on('users'); 
            $table->unsignedBigInteger('maquillador_id');
            $table->foreign('maquillador_id')->references('id')->on('maquilladores'); 
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status_inventario'); 

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
        Schema::dropIfExists('inventario');
    }
}
