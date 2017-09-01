<?php namespace AdrisonLuz\NanoTask\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdrisonluzNanotaskTasks extends Migration
{
    public function up()
    {
        Schema::create('adrisonluz_nanotask_tasks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('task_id')->nullable()->unsigned();
            $table->integer('status')->default(0);
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->date('due')->nullable();
            $table->integer('cliente_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('adrisonluz_nanotask_tasks');
    }
}
