<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorSettings extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
