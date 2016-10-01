<?php

use Illuminate\Database\Seeder;

class WastesilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wastesilos = [
            [
                'waste_silo_number' => 1,
                'waste_full_percentage' => 0
            ],
            [
                'waste_silo_number' => 2,
                'waste_full_percentage' => 0
            ],
            [
                'waste_silo_number' => 3,
                'waste_full_percentage' => 0
            ]

        ];

        DB::table('wastesilos')->insert($wastesilos);
    }
}
