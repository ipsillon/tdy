<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEixoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eixos_itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('eixo_id');
            $table->bigInteger('item_id');
            $table->timestamps();

            $table->foreign('eixo_id')->references('id')->on('eixos');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eixos_itens');
    }
}
