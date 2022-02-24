<?php

namespace Database\Seeders;

use App\Models\Config;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();

        Config::create([
            'reg_start' => $today,
            'we_start' => $tomorrow,
            'we_start_pio' => $tomorrow,
            'we_end' => $tomorrow,
            'quota' => 32,
        ]);
    }
}
