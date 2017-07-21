<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubStuffPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubStuffPositions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('label',50);
            /*
             * Positions:
             * Director Of Football,
             * Office Secretary,
             * Legal Department,
             * TV Department,
             * Technical Director,
             * Ticketing,
             * HR Manager,
             * Financial Director,
             * Accounting,
             * PR Manager,
             * Stadioum Facilities,
             * Marketing,
             * Director of Youth,
             * Chief Scout,
             * Scout,
             * Youth Scout,
             * Social Media,
             * Training Camps
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubStuffPositions');
    }
}
