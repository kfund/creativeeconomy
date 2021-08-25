<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorPostsTags extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tags_id');
            $table->integer('posts_id');
            $table->primary(['tags_id','posts_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_posts_tags');
    }
}
