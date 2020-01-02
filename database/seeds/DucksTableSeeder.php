<?php

use Illuminate\Database\Seeder;

class DucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ducks')->insert([
            'name' => 'Billie',
            'gender' => 'F',
            'age' => 2,
            'breed_id' => 4
        ]);

        DB::table('ducks')->insert([
            'name' => 'Harry',
            'gender' => 'M',
            'age' => 10,
            'breed_id' => 1
        ]);

        DB::table('ducks')->insert([
            'name' => 'Donald',
            'gender' => 'M',
            'age' => 2,
            'breed_id' => 2
        ]);

        DB::table('ducks')->insert([
            'name' => 'Coincoin',
            'gender' => 'F',
            'age' => 1,
            'breed_id' => 3
        ]);

        DB::table('ducks')->insert([
            'name' => 'JeanMi',
            'gender' => 'M',
            'age' => 1,
            'breed_id' => 4
        ]);

        DB::table('ducks')->insert([
            'name' => 'Claudette',
            'gender' => 'F',
            'age' => 3,
            'breed_id' => 4
        ]);
    }
}