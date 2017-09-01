<?php namespace AdrisonLuz\NanoTask\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrisonluzNanotaskTasks8 extends Migration
{
    public function up()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->integer('prioridade')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->dropColumn('prioridade');
        });
    }
}
