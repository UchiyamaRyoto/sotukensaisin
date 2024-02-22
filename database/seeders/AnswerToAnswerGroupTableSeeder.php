<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerToAnswerGroupTableSeeder extends Seeder
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
                'answer_group_id' => 1,
                'answer_no' => $l,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $l++;
            DB::table('answerToAnswerGroup')->insert($info);
        }
    }
}
