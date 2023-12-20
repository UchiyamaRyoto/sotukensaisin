<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class questionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            '中世',
            '近世',
            '近代',
            '古代',
        ];
        $now = Carbon::now();
        foreach($contents as $content) {
            $info = [
                'question_group_names' => $content,
                'question_group_sentences' => 'イタリア・ルネサンスの時代には、栄光の古代ギリシャ・ローマが衰退したのちに、ゲルマン民族の軍隊がイタリアの土地と庶民を支配する「暗黒時代」となり、さらに後にルネサンス（復興）の時代を経て「現在」（啓蒙主義の時代）に至ると考えられた。栄光の古代と復興後の現代の中間に横たわるこの暗黒時代は中世と呼ばれて忌み嫌われ、古代―中世―近代の三時代区分法が西洋史の大きな枠組みとして広く使われるようになった',
                'user_id' => 1,
                'question_collection_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('question_groups')->insert($info);
        }
    }
}
