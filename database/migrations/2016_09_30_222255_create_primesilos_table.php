<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimesilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primesilos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prime_silo_number');
            $table->integer('prime_full_percentage');
            $table->integer('material_id')->unsigned()->index()->nullable();
            $table->foreign('material_id')->references('id')->on('materials');
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
        Schema::dropIfExists('primesilos');
    }
}
