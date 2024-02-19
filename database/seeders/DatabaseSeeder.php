<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(test2::class);
        //$this->call(userSeeder::class);
        //$this->call(questionCollectionSeeder::class);
        //$this->call(questionGroupSeeder::class);

        //ユーザーテーブル
        $this->call(UsersTableSeeder::class);
        //カテゴリー（章）
        $this->call(CategoriesTableSeeder::class);
        //コレクション（説）
        $this->call(CollectionsTableSeeder::class);
        //クエスチョン（問）
        $this->call(QuestionsTableSeeder::class);
        //アンサー（答）
        $this->call(AnswersTableSeeder::class);
    }
}
