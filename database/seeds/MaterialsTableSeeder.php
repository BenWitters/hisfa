<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'amount' => 1,
                'material_type_id' => 1
            ],
            [
                'amount' => 1,
                'material_type_id' => 2
            ],
            [
                'amount' => 1,
                'material_type_id' => 3
            ],
            [
                'amount' => 1,
                'material_type_id' => 4
            ],
            [
                'amount' => 1,
                'material_type_id' => 5
            ]

        ];

        DB::table('materials')->insert($materials);
    }
}
