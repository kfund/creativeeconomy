<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKfundCreatorCities extends Migration
{
    public function up()
    {
        Schema::table('kfund_creator_cities', function($table)
        {
            $table->string('adress')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kfund_creator_cities', function($table)
        {
            $table->dropColumn('adress');
        });
    }
}
