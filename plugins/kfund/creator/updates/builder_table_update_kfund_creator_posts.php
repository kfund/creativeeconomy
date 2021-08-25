<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorPosts extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_posts', function($table)
        {
            $table->boolean('discount')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_posts', function($table)
        {
            $table->dropColumn('discount');
        });
    }
}
