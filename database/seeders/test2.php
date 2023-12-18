<?php

namespace Database\Seeders;
/*
php artisan make:seeder aaaa　seederの作成
php artisan db:seed　seederの実行

use Carbon\Carbon　DateTimeクラス
use lluminate\Support\Facades\DB　DBファザード


*/
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class test2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'テスト1',
            'テスト2',
            'テスト3',
            'テスト4',
            'テスト5',
            'テスト6',
            'テスト7',
            'テスト8',
        ];
        $now = Carbon::now();
        foreach($contents as $content) {
            $info = [
                'name' => $content,
                'tensu' => 80,
                'content' => 'aaaaaaaaaaaaaaaaaaaa',
                'deleted_flag' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('test')->insert($info);
        }
    }
}
