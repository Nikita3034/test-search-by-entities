<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::statement("TRUNCATE TABLE districts;");

        DB::table('districts')->insert([
            [
                'id' => 1,
                'cid' => 1,
                'name' => 'Комсомольский',
                'slug' => 'komsomolskij'
            ],
            [
                'id' => 2,
                'cid' => 1,
                'name' => 'Юбилейный',
                'slug' => 'yubilejnyj'
            ],
            [
                'id' => 3,
                'cid' => 2,
                'name' => 'Донская',
                'slug' => 'donskaya'
            ],
            [
                'id' => 4,
                'cid' => 3,
                'name' => 'Михайлово',
                'slug' => 'mihajlovo'
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
