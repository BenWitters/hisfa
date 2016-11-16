<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlocktypesTableSeeder::class);
        //$this->call(BlocksTableSeeder::class);
        $this->call(MaterialtypesTableSeeder::class);

        $this->call(PrimesilosTableSeeder::class);
        $this->call(WastesilosTableSeeder::class);
    }
}
