<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userLogin', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 250);
            $table->string('password', 250);
            $table->string('fullName', 250);
            $table->string('email', 250);
            $table->string('token', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userLogin');
    }
}
