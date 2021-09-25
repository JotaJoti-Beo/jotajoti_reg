<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places_container = [
            [
                'place_name' => 'Pfadiheim Riedern',
                'place_address' => 'Riedernstrasse 31',
                'place_city' => 'Uetendorf',
                'place_plz' => '3661',
                'place_max_tn' => '30',
            ]
        ];

        foreach ($places_container as $new_place) {
            $place = Place::where('place_name', '=', $new_place['place_name'])->first();

            if ($place == null) {
                $place = Place::create([
                    'place_name' => $new_place['place_name'],
                    'place_address' => $new_place['place_address'],
                    'place_city' => $new_place['place_city'],
                    'place_plz' => $new_place['place_plz'],
                    'place_max_tn' => $new_place['place_max_tn'],
                ]);
                $place->save();
            }
        }
    }
}
