<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCourses2 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->integer('course_price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->dropColumn('course_price');
        });
    }
}
