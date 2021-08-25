<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorCommentsCourses extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_comments_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('courses_id');
            $table->integer('comments_id');
            $table->primary(['courses_id','comments_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_comments_courses');
    }
}
