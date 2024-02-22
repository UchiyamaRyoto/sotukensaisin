<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnswerGpurps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answerGroups', function (Blueprint $table) {
            $table->bigIncrements('answer_group_id');             // アンサーID
            $table->unsignedBigInteger('question_id');      // クエスチョンID（外部キー）
            $table->unsignedBigInteger('id')->default(1);                   //ユーザーID

            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('answerGroups');
    }
}
