<?php

use Illuminate\Database\Seeder;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $block = [
            [
                'block_type_id' => '1',
                'length' => 4,
                'amount' => 80,
            ],
            [
                'block_type_id' => '1',
                'length' => 6,
                'amount' => 88,
            ],
            [
                'block_type_id' => '1',
                'length' => 8,
                'amount' => 40,
            ],
            [
                'block_type_id' => '2',
                'length' => 4,
                'amount' => 34,
            ],
            [
                'block_type_id' => '2',
                'length' => 6,
                'amount' => 8,
            ],
            [
                'block_type_id' => '2',
                'length' => 8,
                'amount' => 28,
            ],
            [
                'block_type_id' => '3',
                'length' => 4,
                'amount' => 57,
            ],
            [
                'block_type_id' => '3',
                'length' => 6,
                'amount' => 95,
            ],
            [
                'block_type_id' => '3',
                'length' => 8,
                'amount' => 37,
            ],
            [
                'block_type_id' => '4',
                'length' => 4,
                'amount' => 29,
            ],
            [
                'block_type_id' => '4',
                'length' => 6,
                'amount' => 90,
            ],
            [
                'block_type_id' => '4',
                'length' => 8,
                'amount' => 38,
            ],
            [
                'block_type_id' => '5',
                'length' => 4,
                'amount' => 78,
            ],
            [
                'block_type_id' => '5',
                'length' => 6,
                'amount' => 76,
            ],
            [
                'block_type_id' => '5',
                'length' => 8,
                'amount' => 97,
            ],
            [
                'block_type_id' => '6',
                'length' => 4,
                'amount' => 25,
            ],
            [
                'block_type_id' => '6',
                'length' => 6,
                'amount' => 48,
            ],
            [
                'block_type_id' => '6',
                'length' => 8,
                'amount' => 10,
            ],
            [
                'block_type_id' => '7',
                'length' => 4,
                'amount' => 3,
            ],
            [
                'block_type_id' => '7',
                'length' => 6,
                'amount' => 90,
            ],
            [
                'block_type_id' => '7',
                'length' => 8,
                'amount' => 87,
            ],
            [
                'block_type_id' => '8',
                'length' => 4,
                'amount' => 60,
            ],
            [
                'block_type_id' => '8',
                'length' => 6,
                'amount' => 73,
            ],
            [
                'block_type_id' => '8',
                'length' => 8,
                'amount' => 4,
            ],
            [
                'block_type_id' => '9',
                'length' => 4,
                'amount' => 78,
            ],
            [
                'block_type_id' => '9',
                'length' => 6,
                'amount' => 26,
            ],
            [
                'block_type_id' => '9',
                'length' => 8,
                'amount' => 49,
            ],
            [
                'block_type_id' => '10',
                'length' => 4,
                'amount' => 20,
            ],
            [
                'block_type_id' => '10',
                'length' => 6,
                'amount' => 15,
            ],
            [
                'block_type_id' => '10',
                'length' => 8,
                'amount' => 19,
            ],
        ];

        DB::table('blocks')->insert($block);
    }
}
