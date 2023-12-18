<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => 'test'
            ,'tensu' => '80'
            ,'questionText' => 'aaaaa?'
        ])
    }
}
