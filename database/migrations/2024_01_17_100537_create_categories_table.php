<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 20240119 加藤　作成 *****************************************************

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id')->unsigned();   // カテゴリーID
            $table->string('category_names');                   // カテゴリー名
            $table->unsignedBigInteger('id')->default(1);                   //ユーザーID
            $table->boolean('public_flg')->default(False);      //公開設定
            $table->string('image_pass')->default("");          //画像パス
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
