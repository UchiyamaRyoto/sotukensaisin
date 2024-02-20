<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            '古代',
            '中世',
            '近世',
        ];
        $now = Carbon::now();
        foreach($contents as $content) {
            $info = [
                'collection_names' => $content,
                'id' => 1,
                'category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('collections')->insert($info);
        }
    }
}
