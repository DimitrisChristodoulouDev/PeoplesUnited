<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            Contact::create([
                'userID'=>2,
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'dateOfBirth'=> $faker->date('Y-m-d'),
                'email'=> $faker->email,
                'fax'=> $faker->phoneNumber,
                'imageUrl'=> 'http://via.placeholder.com/350x150',
                'mobile'=> $faker->phoneNumber,
                'notes'=> 'lorem ipsum',
                'address'=> $faker->address,
                'countryLiving'=> $faker->country,
                'countryBorn'=> $faker->country,
                'city'=> $faker->city,
                'resumeFileUrl'=> 'http://via.placeholder.com/350x150',
                'socialMediaLinks'=> $faker->url,
                'telephone'=> $faker->phoneNumber,
                'importantPeople'=> $faker->boolean(50),
                'categoryID'=> $faker->numberBetween(0,9),
                'personalWebsite'=> $faker->url,
                'workWebsite'=> $faker->url,
                'otherWebsites'=> $faker->url,
                'tableID'=> 1,
                'tableName'=>'agents'
            ]);
        }
    }
}
