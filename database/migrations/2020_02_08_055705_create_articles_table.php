<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subject_area_id');
            $table->unsignedBigInteger('user_id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->longText('content');
            $table->text('article_url')->nullable();;
            $table->boolean('is_original')->default(false);
            $table->boolean('is_draft')->default(true);
            $table->integer('view_count')->unsigned()->default(0)->index();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
