<?php

use Illuminate\Database\Seeder;

class ParticipationsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();
		DB::table('participants')->insert([
			[
			    'scoutname' => $faker->userName,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'address' => $faker->address,
                'plz' => $faker->postcode,
                'place' =>  $faker->city,
                'birthday' => $faker->date(),
                'gender' => 'male'
            ],
        ]);
	}
}
