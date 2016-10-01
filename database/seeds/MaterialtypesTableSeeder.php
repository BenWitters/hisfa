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
                'material_type_name' => 'f21MB-n'
            ],
            [
                'material_type_name' => 'RF23W-n'
            ],
            [
                'material_type_name' => 'KSE-20'
            ],
            [
                'material_type_name' => 'KSE-30'
            ],
            [
                'material_type_name' => 'F21B-n'
            ]
        ];

        DB::table('materialtypes')->insert($materialtypes);

    }
}
