<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('passportFileUrl', 250)->nullable();
            $table->string('resumeFileUrl', 250)->nullable();
            $table->string('passportNumber', 50)->nullable();
            $table->string('socialMediaLinks', 250);
            $table->integer('contactID',false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
