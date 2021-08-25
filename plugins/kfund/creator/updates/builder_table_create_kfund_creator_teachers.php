<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorTeachers extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_teachers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_teachers');
    }
}
