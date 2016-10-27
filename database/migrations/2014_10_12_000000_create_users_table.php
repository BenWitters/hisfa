<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("profile_picture")->nullable();
            $table->boolean("is_admin")->nullable();
            $table->boolean("get_notifications_prime")->nullable();
            $table->boolean("get_notifications_waste")->nullable();
            $table->boolean("can_view_dashboard")->nullable();
            $table->boolean("can_view_blocks")->nullable();
            $table->boolean("can_update_blocks")->nullable();
            $table->boolean("can_view_waste")->nullable();
            $table->boolean("can_update_waste")->nullable();
            $table->boolean("can_view_prime")->nullable();
            $table->boolean("can_update_prime")->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
