<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyLog', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('block_type_name');
            $table->double('length');
            $table->integer('amount');

            $table->string('material_type_name');
            $table->integer('amount_material');

            $table->integer('prime_silo_number');
            $table->integer('prime_full_percentage');

            $table->integer('waste_silo_number');
            $table->integer('waste_full_precentage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dailyLog');
    }
}
