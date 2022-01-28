<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::statement("TRUNCATE TABLE cities;");

        DB::table('cities')->insert([
            [
                'id' => 1,
                'rid' => 1,
                'name' => 'Краснодар',
                'slug' => 'krasnodar'
            ],
            [
                'id' => 2,
                'rid' => 1,
                'name' => 'Сочи',
                'slug' => 'sochi'
            ],
            [
                'id' => 3,
                'rid' => 1,
                'name' => 'Майкоп',
                'slug' => 'majkop'
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
