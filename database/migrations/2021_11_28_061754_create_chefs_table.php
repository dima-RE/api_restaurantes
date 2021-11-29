<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->string("rut",12)->primary();
            $table->string("nombre",50);
            $table->string("especialidad",20);
            $table->string("restaurante_id",12);
            $table->softDeletes();

            $table->foreign('restaurante_id')->references('rut')->on('restaurantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chefs');
    }
}
