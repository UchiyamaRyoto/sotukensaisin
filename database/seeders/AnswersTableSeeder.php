<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            True,
            False,
            True,
            True,
            False
        ];
        $now = Carbon::now();
        $l = 1;
        foreach($contents as $content) {
            $info = [
                'answer_no' => $l,
                'answer_texts' => "16世紀ドイツで、贖宥状を批判し、九十五か条の論題を提起したのは誰？",
                'answer_booleans' => $content,
                'correct1' => "正解文章",
                'wrong1' => "誤答文章1",
                'wrong2' => "誤答文章2",
                'wrong3' => "誤答文章3",
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $l++;
            DB::table('answers')->insert($info);
        }
    }
}
