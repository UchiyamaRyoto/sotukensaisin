<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class questionAnswer extends Seeder
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
                'question_answer_id' => $l,
                'question_id' => 1,
                'question_answer_texts' => "16世紀ドイツで、贖宥状を批判し、九十五か条の論題を提起したのは誰？",
                'question_booleans' => $content,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $l++;
            DB::table('question_answers')->insert($info);
        }
    }
}
