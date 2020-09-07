<?php

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups_container = ['Dracheburg', 'Mülistei', 'Nünenen', 'Berchtold', 'St. Christophorus', 'Stärn vo Buebebärg', 'Unspunne', 'Virus', 'Wendelsee'];

        foreach ($groups_container as $group_name) {
            $group = Group::where('group_name', '=', $group_name)->first();

            if ($group == null) {
                $group = Group::create(['group_name' => $group_name]);
                $group->save();
            }
        }
    }
}
