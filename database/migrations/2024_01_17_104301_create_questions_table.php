<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 20240119 加藤　作成 **************************************************

        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('question_id')->unsigned();   // クエスチョンID
            $table->string('question_names', 30);               // クエスチョン名
            $table->text('question_sentences');               // クエスチョン文
            $table->integer('question_lengths');                // クエスチョンの長さ
            $table->boolean('question_booleans');               // クエスチョン正誤
            $table->string('question_img_path');
            $table->unsignedBigInteger('collection_id');        // コレクションID（外部キー
            $table->unsignedBigInteger('id')->default(1);                   //ユーザーID
            $table->boolean('public_flg')->default(False);      //公開設定
            $table->string('image_pass')->default("");          //画像パス
            $table->integer('question_number')->default(5);     //問題数
            $table->integer('before_lengths')->default(10000);
            
            // ↓外部キー制約
            $table->foreign('collection_id')->references('collection_id')->on('collections');
            $table->foreign('id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
