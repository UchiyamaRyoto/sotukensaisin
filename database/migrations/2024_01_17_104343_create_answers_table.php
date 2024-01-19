<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 20240119 加藤　作成 *******************************************

        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('answer_id');             // アンサーID
            $table->string('answer_texts');                 // アンサー文
            $table->boolean('answer_booleans');             // アンサー正誤
            $table->unsignedBigInteger('question_id');      // クエスチョンID（外部キー）
            // 外部キー制約
            $table->foreign('question_id')->references('question_id')->on('questions');
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
        Schema::dropIfExists('answers');
    }
}
