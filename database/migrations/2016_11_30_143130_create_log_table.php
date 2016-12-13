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

            $table->block_type_name();
            $table->length();
            $table->amount();

            $table->material_type_name();
            $table->amount_material();

            $table->prime_silo_number();
            $table->prime_full_percentage();

            $table->waste_silo_number();
            $table->waste_full_precentage();

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
