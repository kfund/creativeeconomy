<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorSettings3 extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->string('discount')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_settings', function($table)
        {
            $table->boolean('discount')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
