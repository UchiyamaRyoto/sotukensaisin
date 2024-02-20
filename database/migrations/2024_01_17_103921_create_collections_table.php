<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 20240119 加藤　作成 **********************************************

        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('collection_id');     // コレクションID
            $table->string('collection_names', 30);     // コレクション名
            //$table->text('collection_sentences');       // コレクション文
            $table->unsignedBigInteger('id');           // ユーザーID（外部キー）
            $table->unsignedBigInteger('category_id');  // カテゴリーID（外部キー）
            $table->boolean('public_flg')->default(False);
            $table->string('image_pass')->default("");

            // ↓外部キー制約
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('category_id')->references('category_id')->on('categories');

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
        Schema::dropIfExists('collections');
    }
}
