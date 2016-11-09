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
                'is_admin' => true,
                'can_view_dashboard' => 1,
                'can_view_blocks' => 1,
                'can_update_blocks' => 1,
                'can_view_waste' => 1,
                'can_update_waste' => 1,
                'can_view_prime' => 1,
                'can_update_prime' => 1

            ],
            [
                'name' => 'tom',
                'email' => 'tom@changeme.hisfa',
                'password' => bcrypt('hisfa'),
                'profile_picture' => 'img/default/default-user-avatar.jpg',
                'is_admin' => true,
                'can_view_dashboard' => 1,
                'can_view_blocks' => 1,
                'can_update_blocks' => 1,
                'can_view_waste' => 1,
                'can_update_waste' => 1,
                'can_view_prime' => 1,
                'can_update_prime' => 1
            ]

        ];

        DB::table('users')->insert($users);

    }
}
