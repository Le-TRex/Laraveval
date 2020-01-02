<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            'name' => 'Caoutchouc',
            'mainColor' => 'Jaune'
        ]);

        DB::table('breeds')->insert([
            'name' => 'Canard d\'Aylesbury',
            'mainColor' => 'Blanc'
        ]);

        DB::table('breeds')->insert([
            'name' => 'Cayuga',
            'mainColor' => 'Vert'
        ]);

        DB::table('breeds')->insert([
            'name' => 'Mandarin',
            'mainColor' => 'Caramel'
        ]);

    }
}
