<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('contactPersonPhoto', 250)->nullable();
            $table->string('contactPersonName', 50);
            $table->string('companyType', 50); //TODO ??? New table ???
            $table->string('address', 250);
            $table->float('amountSponsored');
            $table->integer('durationMonths', false);
            $table->boolean('lookingNewClub')->default(false);
            $table->boolean('lookingNewPlayer')->default(false);




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
