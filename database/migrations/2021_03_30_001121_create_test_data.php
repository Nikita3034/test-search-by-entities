<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTestData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('regions')->insert([
            [
                'id' => 1,
                'name' => 'Краснодарский край',
                'slug' => 'krasnodarskij-kraj'
            ]
        ]);

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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
