<?php

use Illuminate\Database\Seeder;

class PrimesilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $primesilos = [
            [
                'prime_silo_number' => 1,
                'prime_full_percentage' => 10,
                'material_id' => 1,
            ],
            [
                'prime_silo_number' => 2,
                'prime_full_percentage' => 22,
                'material_id' => 4,
            ],
            [
                'prime_silo_number' => 3,
                'prime_full_percentage' => 68,
                'material_id' => 2,
            ],
            [
                'prime_silo_number' => 4,
                'prime_full_percentage' => 45,
                'material_id' => 3,
            ],
            [
                'prime_silo_number' => 5,
                'prime_full_percentage' => 84,
                'material_id' => 4,
            ],
            [
                'prime_silo_number' => 6,
                'prime_full_percentage' => 33,
                'material_id' => 5,
            ]

        ];

        DB::table('primesilos')->insert($primesilos);

    }
}
