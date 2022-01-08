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
                'name' => 'Pfadiheim Riedern',
                'address' => 'Riedernstrasse 31',
                'city' => 'Uetendorf',
                'plz' => '3661',
                'quota' => '32',
            ]
        ];

        foreach ($places_container as $new_place) {
            $place = Place::where('name', '=', $new_place['name'])->first();

            if ($place == null) {
                $place = Place::create([
                    'name' => $new_place['name'],
                    'address' => $new_place['address'],
                    'city' => $new_place['city'],
                    'plz' => $new_place['plz'],
                    'quota' => $new_place['quota'],
                ]);
                $place->save();
            }
        }
    }
}
