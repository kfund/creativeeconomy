<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorCoursesCt extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_courses_ct', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ct_id');
            $table->integer('courses_id');
            $table->primary(['ct_id','courses_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_courses_ct');
    }
}
