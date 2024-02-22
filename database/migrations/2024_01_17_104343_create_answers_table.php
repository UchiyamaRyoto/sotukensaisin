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
            $table->bigIncrements('answer_no');
            $table->string('answer_texts');                 // アンサー文
            $table->boolean('answer_booleans');             // アンサー正誤
            $table->string('correct1');
            $table->string('wrong1');
            $table->string('wrong2');
            $table->string('wrong3');

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
