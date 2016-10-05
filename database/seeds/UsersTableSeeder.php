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
                'password' => bcrypt('admin'),
                'profile_picture' => 'img/default/default-user-avatar.jpg',
                'is_admin' => true

            ],
            [
                'name' => 'tom',
                'email' => 'tom@hisfa.be',
                'password' => bcrypt('tom'),
                'profile_picture' => 'img/default/default-user-avatar.jpg',
                'is_admin' => true
            ]

        ];

        DB::table('users')->insert($users);

    }
}
