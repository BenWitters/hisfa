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
            $table->integer('prime_silo_number')->unique();
            $table->integer('prime_full_percentage');
            $table->double('prime_weight')->nullable();
            $table->double('amount_in_tonne')->nullable();
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materialtypes');
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
