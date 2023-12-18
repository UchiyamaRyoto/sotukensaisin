<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('question_answer_id');
            $table->foreignId('question_id')->constrained('questions'); // 外部キー
            $table->string('question_answer_texts');
            $table->boolean('question_booleans');
            $table->primary(['question_answer_id', 'question_id']);     // 複合主キー
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
        Schema::dropIfExists('question_answers');
    }
}
