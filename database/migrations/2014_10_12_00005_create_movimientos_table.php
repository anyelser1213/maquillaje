<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();

            $table->mediumText('descripcion');

            //$table->date('fecha');
            //$table->time('hora');
            
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('set null');

            //$table->foreign('color_articulos_id')->references('id')->on('color_articulos')->onDelete('set null');
            

            $table->timestamp("fecha_entrega_producto")->nullable();
            $table->timestamp("fecha_recibir_producto")->nullable();

            //create_at y update_at
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
        Schema::dropIfExists('movimientos');
    }
}
