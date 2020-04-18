<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            [
                'id' => '1',
                'place_name' => 'Pfadiheim Riedern',
                'place_address' => 'Riedernstrasse 31',
                'place_city' => 'Uetendorf',
                'place_plz' => '3661',
                'place_max_tn' => '33'
            ],
            [
                'id' => '2',
                'place_name' => 'Müli Deisswil',
                'place_address' => 'Bernstrasse 14',
                'place_city' => 'Stettlen',
                'place_plz' => '3066',
                'place_max_tn' => '33'
            ],
        ]);
    }
}
