<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::statement("TRUNCATE TABLE regions;");

        DB::table('regions')->insert([
            [
                'id' => 1,
                'name' => 'Краснодарский край',
                'slug' => 'krasnodarskij-kraj'
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
