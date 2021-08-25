<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorSettings2 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
