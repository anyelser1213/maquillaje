<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();

            //Hacemos las relaciones en la tabla 
            $table->foreign('marca_id')
                    ->references('id')->on('marcas')
                    ->onDelete('set null');

            $table->foreign('color_id')
                    ->references('id')->on('color')
                    ->onDelete('set null');

            $table->string('tipo_producto');
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
        Schema::dropIfExists('articulos');
    }
}
