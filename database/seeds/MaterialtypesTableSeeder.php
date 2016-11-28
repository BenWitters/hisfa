<?php

use Illuminate\Database\Seeder;

class MaterialtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materialtypes = [
            [
                'material_type_name' => 'f21MB-n',
                'amount' => '2'
            ],
            [
                'material_type_name' => 'RF23W-n',
                'amount' => '5'
            ],
            [
                'material_type_name' => 'KSE-20',
                'amount' => '6'
            ],
            [
                'material_type_name' => 'KSE-30',
                'amount' => '4'
            ],
            [
                'material_type_name' => 'F21B-n',
                'amount' => '3'
            ]
        ];

        DB::table('materialtypes')->insert($materialtypes);

    }
}
