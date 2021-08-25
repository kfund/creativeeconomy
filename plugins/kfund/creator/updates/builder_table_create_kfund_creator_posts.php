<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorPosts extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_descr')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('image_source')->nullable();
            $table->text('paragraph_1')->nullable();
            $table->text('paragraph_2')->nullable();
            $table->string('video_link')->nullable();
            $table->string('article_1_title')->nullable();
            $table->text('article_1_text')->nullable();
            $table->string('article_2_title')->nullable();
            $table->text('article_2_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_posts');
    }
}
