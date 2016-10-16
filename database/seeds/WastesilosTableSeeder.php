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
                'waste_full_percentage' => 83,
                'block_type_id' => 1
            ],
            [
                'waste_silo_number' => 2,
                'waste_full_percentage' => 55,
                'block_type_id' => 3
            ],
            [
                'waste_silo_number' => 3,
                'waste_full_percentage' => 27,
                'block_type_id' => 5
            ]

        ];

        DB::table('wastesilos')->insert($wastesilos);
    }
}
