<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed adminuser
        $seededAdminEmail = 'admin@jojo.ch';
        $user = User::where('email', '=', $seededAdminEmail)->first();

        if ($user === null) {
            $user = User::create([
                'scout_name' => 'Admin',
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => $seededAdminEmail,
                'password' => Hash::make('password'),
            ]);

            $user->save();
        }
    }
}
