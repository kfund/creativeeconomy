<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCoursesCt extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_courses_ct', function($table)
        {
            $table->dropPrimary(['ct_id','courses_id']);
            $table->renameColumn('ct_id', 'ctypes_id');
            $table->primary(['ctypes_id','courses_id']);
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_courses_ct', function($table)
        {
            $table->dropPrimary(['ctypes_id','courses_id']);
            $table->renameColumn('ctypes_id', 'ct_id');
            $table->primary(['ct_id','courses_id']);
        });
    }
}
