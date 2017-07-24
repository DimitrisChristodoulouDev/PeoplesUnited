<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID',false);
            $table->timestamps();
            $table->string('name',20);
            $table->string('surname',20);
            $table->date('dateOfBirth')->nullable();
            $table->string('email', 50);
            $table->string('fax', 50)->nullable();
            $table->string('imageUrl', 250)->nullable()->default('users/default.jpg');
            $table->string('mobile', 50);
            $table->text('notes')->nullable();
            $table->string('address',100);
            $table->string('countryLiving',50);
            $table->string('countryBorn',50);
            $table->string('city',50);
            $table->string('resumeFileUrl',250)->nullable();
            $table->string('socialMediaLinks', 250);
            $table->string('telephone', 50);
            $table->boolean('importantPeople')->default(false);
            $table->integer('categoryID', false);
            $table->string('personalWebsite', 250)->nullable();
            $table->string('workWebsite', 250)->nullable();
            $table->string('otherWebsites', 250)->nullable();
/*'tableID'=> 1,
                'tableName'=>'agents'
 * */
            $table->integer('tableID',false);
            $table->string('tableName', 50);








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
