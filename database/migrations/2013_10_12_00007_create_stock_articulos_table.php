<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_articulos', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('articulos_id');
            $table->foreign('articulos_id')->references('id')->on('articulos'); 

            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');


            $table->integer('cantidad')->unsigned()->default(0);
            $table->string('tipo')->default("cosmeticos");


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
        Schema::dropIfExists('stock_articulos');
    }
}
