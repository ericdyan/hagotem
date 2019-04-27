<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->integer('address_id')->nullable();
            $table->integer('user_id');
            $table->integer('order_id')->nullable();
            $table->timestamps();
        });

        Schema::table('users_info', function (Blueprint $table) {
          $table->foreign('address_id')->references('id')->on('addresses');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_info');
    }
}
