<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class questionCollectionSeeder extends Seeder
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
                'question_collection_names' => $content,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('question_collections')->insert($info);
        }
    }
}
