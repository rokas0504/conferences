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
                'title' => 'Smokingu susirinkimai',
                'description' => 'Džentelmenų susirinkimas aptarti aprangą.',
                'date' => '2024-05-15',
                'address' => '123 Kalvarijų g. Vilnius',
            ],
            [
                'title' => 'Sodų bendrijų susirinkimas',
                'description' => 'Susirinkimas aptarti nepradėtų kelių tvarkymo.',
                'date' => '2024-06-10',
                'address' => '42 Kranto g., Velžys',
            ],
        ]);
    }
}
