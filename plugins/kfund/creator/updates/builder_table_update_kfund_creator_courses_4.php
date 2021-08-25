<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCourses4 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->boolean('discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_courses', function($table)
        {
            $table->dropColumn('discount');
        });
    }
}
