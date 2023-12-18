<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

        //php artisan migrate　migrate実行
        //php artisan migrate:rollback aaa マイグレーション戻す
        //php artisan migrate:reset aaa　マイグレーション取り消し テーブルの全削除
        //php artisan migrate:refresh　マイグレーションをすべて取り消して再実行
        //php artisan migrate:status　マイグレーション状態を確認
        //php artisan make migration aaa　マイグレーション作成

        //メソッド
        //up()　migrate実行時に処理
        //down()　rollback時に処理

        //データ型
        //$table->integer('aaa')　INTEGER型
        //$table->bigInteger('aaa')　BIGINTEGER型
        //$table->increments('aaa')　漸次
        //$table->text('aaa')　text
        //$table->string　varchar(255)
        //$table->datetime('aaa')　データイム型
        
        //カラム修飾子
        //after()　カラムを追加するときに使用、引数として追加する前のカラム名を渡す
        //default()　insert自のデフォルト値を引数で渡して設定
        //nullable()　カラムをnull許可する、ついてない場合必須

        //$table->unique('aaa')　ユニークキーの作成
        //$table->primary('aaa')　プライマリーキーの作成



    public function up()
    {
        
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('tensu');
            $table->text('questionText');
            $table->datetime('updTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
