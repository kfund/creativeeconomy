<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorCourses extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_descr')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->text('for_whom')->nullable();
            $table->integer('st_years')->nullable();
            $table->integer('st_hours')->nullable();
            $table->integer('st_percents')->nullable();
            $table->integer('st_students')->nullable();
            $table->text('for_what')->nullable();
            $table->string('video_link')->nullable();
            $table->string('acc_1_title')->nullable();
            $table->text('acc_1_text')->nullable();
            $table->string('acc_2_title')->nullable();
            $table->text('acc_2_text')->nullable();
            $table->string('acc_3_title')->nullable();
            $table->text('acc_3_text')->nullable();
            $table->string('acc_4_title')->nullable();
            $table->text('acc_4_text')->nullable();
            $table->string('acc_5_title')->nullable();
            $table->text('acc_5_text')->nullable();
            $table->integer('lessons_count')->nullable();
            $table->integer('hours_count')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_courses');
    }
}
