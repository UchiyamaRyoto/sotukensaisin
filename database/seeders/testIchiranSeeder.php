<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class testIchiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'テスト1問',
            'テスト2問',
            'テスト3問',
            'テスト4問',
            'テスト5問',
            'テスト6問',
            'テスト7問',
            'テスト8問',
        ];
        $now = Carbon::now();
        foreach($contents as $content) {
            $info = [
                'question_collection_name' => $content,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('question_collections')->insert($info);
        }
    }
}
