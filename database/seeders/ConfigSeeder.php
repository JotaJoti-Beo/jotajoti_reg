<?php

namespace Database\Seeders;

use App\Models\Config;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::now();

        Config::create([
            'reg_start' => $today,
            'jojo_start' => $today,
            'jojo_start_pio' => $today,
            'jojo_end' => $today,
            'max_tn' => 30,
        ]);
    }
}
