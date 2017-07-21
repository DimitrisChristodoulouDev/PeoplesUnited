<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('countryCode', 5);// From the code, display the appropriate flag (flags.css)
            $table->integer('positionID', false);
            $table->integer('clubID', false)->nullable();// A not hired player
            $table->string('nationalities', 250); //TODO: Comma seperated ???
            $table->string('nationalitiesCodes', 250); //TODO: Comma seperated ???
            $table->float('height', 5);
            $table->float('weight', 5);
            $table->integer('internationalGames', false);
            $table->integer('internationalGoals', false);
            $table->date('debutGame');
            $table->date('contractStart');
            $table->date('contractEnd');
            $table->enum('level', ['A', 'U21', 'U19', 'U17', 'U15']);
            $table->date('lastGameDate');
            $table->enum('goodLeg', ['left', 'right', 'both']);
            $table->integer('shoeSize', false);
            $table->string('fatherName', 20)->nullable();
            $table->string('fatherSurname', 20)->nullable();
            $table->string('fatherEmail', 20)->nullable();
            $table->string('motherName', 20)->nullable();
            $table->string('motherSurname', 20)->nullable();
            $table->string('motherEmail', 20)->nullable();
            $table->string('other', 250);
            $table->string('socialMediaLinks', 250);
            $table->integer('titlesWon', false);
            $table->boolean('client')->default(false);
            $table->boolean('hitList')->default(false);
            $table->boolean('hotPlayer')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
