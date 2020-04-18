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
			['id' => '2', 'group_name' => 'Berchtold'],
			['id' => '2', 'group_name' => 'Virus'],
			['id' => '2', 'group_name' => 'Wendelsee'],
		]);
	}
}
