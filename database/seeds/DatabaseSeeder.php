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
        $this->call(MaterialtypesTableSeeder::class);
        //$this->call(MaterialsTableSeeder::class);
<<<<<<< HEAD
        //$this->call(PrimesilosTableSeeder::class);
=======
        $this->call(PrimesilosTableSeeder::class);
>>>>>>> 7088aacf2c0dd06fb17a11fdf84aa7895d883d9b
        $this->call(WastesilosTableSeeder::class);
    }
}
