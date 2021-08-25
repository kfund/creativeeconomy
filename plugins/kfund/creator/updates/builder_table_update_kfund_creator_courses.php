<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCourses extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->integer('free_places')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->dropColumn('free_places');
        });
    }
}
