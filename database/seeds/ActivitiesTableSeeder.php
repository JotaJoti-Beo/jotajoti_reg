<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['id' => '1', 'activity_name' => 'Chatten'],
            ['id' => '2', 'activity_name' => 'Löten'],
            ['id' => '3', 'activity_name' => 'Funken'],
            ['id' => '4', 'activity_name' => 'Geländegame'],
        ]);
    }
}
