<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockCosmeticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_cosmeticos', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('cosmeticos_id')->nullable();
            $table->foreign('cosmeticos_id')->references('id')->on('cosmeticos')->onDelete('set null');
            
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('set null');


            $table->integer('cantidad')->unsigned()->default(0);
            $table->string('tipo')->default("cosmeticos");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_cosmeticos');
    }
}
