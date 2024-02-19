<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            '宗教改革',
            'ルネサンス',
            '東ヨーロッパ',
        ];
        $contents2 = [
            '宗教改革（しゅうきょうかいかく、英: Protestant Reformation）とは、16世紀（中世末期 - 近世）の西方キリスト教世界における教会体制上の革新運動である。贖宥状に対するルターの批判がきっかけとなり、以前から指摘されていた教皇位の世俗化、聖職者の堕落などへの信徒の不満と結びついて、旧教（ローマ・カトリック教会）から新教の分離へと発展した。',
            'ルネサンス（仏: Renaissance[† 1][† 2]　伊：Rinascimento）は、「再生」「復活」などを意味するフランス語であり、一義的には古典古代（ギリシア、ローマ）の文化を復興しようとする文化運動。14世紀にイタリアで始まり、やがて西欧各国に広まった（文化運動としてのルネサンス）。また、これらの時代（14世紀 - 16世紀）を指すこともある（時代区分としてのルネサンス）。',
            '東ヨーロッパ（ひがしヨーロッパ、英: Eastern Europe、露: Восточная Европа、チェコ語: východní Evropa、ポーランド語: Europa Wschodnia）は、ヨーロッパの東部地域を指す。東欧（とうおう）とも呼ばれる。欧州でも特に民族の構成が複雑で、文化や宗教も多種多様に存在する。',
        ];
        $now = Carbon::now();
        foreach($contents as $key =>$content) {
            $info = [
                'question_names' => $content,
                'question_sentences' => $contents2[$key],
                'question_lengths' => 13423,
                'collection_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
                'question_booleans' => True,
                'question_img_path' => "",
            ];
            DB::table('questions')->insert($info);
        }
    }
}
