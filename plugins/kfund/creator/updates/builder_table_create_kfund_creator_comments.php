<?php namespace Kfund\Creator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKfundCreatorComments extends Migration
{
    public function up()
    {
        Schema::create('kfund_creator_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kfund_creator_comments');
    }
}
