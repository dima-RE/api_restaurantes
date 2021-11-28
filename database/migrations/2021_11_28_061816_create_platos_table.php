<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",50);
            $table->unsignedBigInteger("ingrediente_id");
            $table->string("chef_id",12);
            $table->unsignedInteger("precio");
            //$table->timestamps();

            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
            $table->foreign('chef_id')->references('rut')->on('chefs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platos');
    }
}
