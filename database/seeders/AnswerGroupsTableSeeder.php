<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerGroupsTableSeeder extends Seeder
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
                'question_id' => 1,
                'id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $l++;
            DB::table('answerGroups')->insert($info);
        }
    }
}
