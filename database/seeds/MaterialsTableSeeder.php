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
            ],
            [
                'amount' => 1,
                'material_type_id' => 2
            ],
            [
                'amount' => 1,

            ],
            [
                'amount' => 1,
            ],
            [
                'amount' => 1,
            ]

        ];

        DB::table('materials')->insert($materials);
    }
}
