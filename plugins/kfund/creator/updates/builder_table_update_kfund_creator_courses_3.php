<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCourses3 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->text('hint1')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->dropColumn('hint1');
        });
    }
}
