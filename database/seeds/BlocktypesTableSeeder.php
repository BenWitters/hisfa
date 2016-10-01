<?php

use Illuminate\Database\Seeder;

class BlocktypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocktypes = [
            [
                'block_type_name' => 'P15'
            ],
            [
                'block_type_name' => '60SE'
            ],
            [
                'block_type_name' => 'P20'
            ],
            [
                'block_type_name' => '100SE'
            ],
            [
                'block_type_name' => 'P25'
            ],
            [
                'block_type_name' => '150SE'
            ],
            [
                'block_type_name' => 'P30'
            ],
            [
                'block_type_name' => '200SE'
            ],
            [
                'block_type_name' => 'P35'
            ],
            [
                'block_type_name' => '250SE'
            ],
        ];

        DB::table('blocktypes')->insert($blocktypes);
    }
}
