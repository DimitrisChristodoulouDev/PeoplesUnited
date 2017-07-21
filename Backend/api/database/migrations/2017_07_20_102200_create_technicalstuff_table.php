<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalstuffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicalStuff', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('positionID', false );
            $table->integer('preferredFormationss', false);
            $table->string('statistics', 250);
            $table->integer('titlesWon', false);
            $table->string('achievements', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicalStuff');
    }
}
