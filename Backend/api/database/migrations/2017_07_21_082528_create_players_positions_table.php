<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playersPositions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('label',50);
            $table->string('code',5);
            // TODO: Or prefer to add enum???
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playersPositions');
    }
}
