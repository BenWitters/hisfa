<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWastesilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wastesilos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('waste_silo_number');
            $table->integer('waste_full_percentage')->nullable();
            $table->integer('block_type_id')->unsigned()->index()->nullable();
            $table->foreign('block_type_id')->references('id')->on('blocktypes');
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
        Schema::dropIfExists('wastesilos');
    }
}
