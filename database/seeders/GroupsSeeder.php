<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups_container = [
            'Dracheburg',
            'Mülistei',
            'Nünenen',
            'Berchtold',
            'St. Christophorus',
            'Stärn vo Buebebärg',
            'Unspunne',
            'Virus',
            'Wendelsee',
        ];

        foreach ($groups_container as $name) {
            $group = Group::where('name', '=', $name)->first();

            if ($group == null) {
                Group::create([
                    'name' => $name,
                    'quota' => 30
                ]);
            }
        }
    }
}
