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
        Schema::create('collections', function (Blueprint $table) {
            $table->bigIncrements('collection_id');
            $table->string('collection_names', 30);
            $table->text('collection_sentences');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('category_id');
            // 外部キー制約
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
