<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base = Carbon::now()->add(1, 'month');

        DB::table('stages')->insert([
            ['id' => '1', 'stage_name' => 'Pfadistufe', 'starttime' => $base->add(1, 'day'), 'endtime' => $base->add(2, 'day')],
            ['id' => '2', 'stage_name' => 'Piostufe', 'starttime' => $base->add(1, 'day'), 'endtime' => $base->add(3, 'day')],
        ]);
    }
}
