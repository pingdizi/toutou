<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('文章标题');
            $table->integer('user_id')->comment('发布者');
            $table->string('cover')->nullable()->comment('文章封面');
            $table->text('content')->nullable()->comment('文章内容');
            $table->tinyInteger('type')->default('1')->comment('文章类型(1,股市，2：外汇,3:商品,4:基金,5:商业,6交易商)');
            $table->integer('view_count')->default('0')->comment('访问量');
            $table->tinyInteger('is_check')->default('0')->comment('审核,默认0未审核');
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
        Schema::dropIfExists('news');
    }
}
