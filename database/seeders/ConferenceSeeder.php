<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Add this line

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([
            [
                'title' => 'Laravel Conference 2024',
                'description' => 'A conference for Laravel enthusiasts.',
                'date' => '2024-05-15',
                'address' => '123 Laravel St, San Francisco, CA',
            ],
            [
                'title' => 'Vue.js Summit',
                'description' => 'Join us for an exciting Vue.js event.',
                'date' => '2024-06-10',
                'address' => '456 JavaScript Ave, New York, NY',
            ],
        ]);
    }
}
