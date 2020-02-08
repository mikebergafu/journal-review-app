<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subject_area_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('edition_id');
            $table->string('slug',300)->unique();
            $table->string('title',300);
            $table->text('abstract');
            $table->string('paper_url',300);
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
        Schema::dropIfExists('papers');
    }
}
