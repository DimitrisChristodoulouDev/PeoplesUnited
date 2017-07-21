<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactsCategories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('categoryLabel',50); //Shown to the user
            $table->string('tableNameReference', 250); /* Table Names [
                'agents',
                'boardofDirector',
                'players',
                'technicalStuff',
                'clubStuff',
                'sponsors',
                'exPlayers','Media Person',
                'funClub',
                'otherContacts'
            ]);*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactsCategories');
    }
}
