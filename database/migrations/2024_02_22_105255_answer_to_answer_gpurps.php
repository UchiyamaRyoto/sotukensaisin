<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnswerToAnswerGpurps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answerToAnswerGroup', function (Blueprint $table) {
            $table->unsignedBigInteger('answer_no');
            $table->unsignedBigInteger('answer_group_id');

            $table->foreign('answer_no')->references('answer_no')->on('answers');
            $table->foreign('answer_group_id')->references('answer_group_id')->on('answerGroups');

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
        Schema::dropIfExists('answerToanswerGroup');
    }
}
