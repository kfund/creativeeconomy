<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorSettings4 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->string('video_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->dropColumn('video_link');
        });
    }
}
