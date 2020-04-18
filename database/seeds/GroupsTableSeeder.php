<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('groups')->insert([
			['id' => '1', 'group_name' => 'Nünenen'],
			['id' => '2', 'group_name' => 'Dracheburg'],
			['id' => '3', 'group_name' => 'Berchtold'],
			['id' => '4', 'group_name' => 'Virus'],
			['id' => '5', 'group_name' => 'Wendelsee'],
			['id' => '6', 'group_name' => 'Mülistei'],
			['id' => '7', 'group_name' => 'St. Christophorus'],
			['id' => '8', 'group_name' => 'Stärn vo Buebebärg'],
			['id' => '9', 'group_name' => 'Unspunne'],
		]);
	}
}
