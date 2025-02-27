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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin1234'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Camille',
            'email' => 'camille@duck.fr',
            'password' => bcrypt('camille1234'),
            'role_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Alex',
            'email' => 'alex@duck.fr',
            'password' => bcrypt('alex1234'),
            'role_id' => 3
        ]);
    }
}