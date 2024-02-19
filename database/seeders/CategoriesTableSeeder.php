<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            '世界史',
            '日本史',
            '文化史',
        ];
        $now = Carbon::now();
        foreach($contents as $content) {
            $info = [
                'category_names' => $content,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('categories')->insert($info);
        }
    }
}
