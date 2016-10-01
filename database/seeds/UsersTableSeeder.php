<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@hisfa.be',
                'password' => 'admin',
                'is_admin' => true
            ],
            [
                'name' => 'tom',
                'email' => 'tom@hisfa.be',
                'password' => 'tom',
                'is_admin' => true
            ]

        ];

        DB::table('users')->insert($users);

    }
}
