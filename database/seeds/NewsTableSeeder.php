<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['id' => '1', 'news_title' => 'Test 1', 'news' => 'This is a test with a news!'],
            ['id' => '2', 'news_title' => 'Test 2', 'news' => 'This is a test with a news!'],
            ['id' => '3', 'news_title' => ' Test 3', 'news' => 'This is a test with a news!'],
        ]);
    }
}
