<?php namespace AdrisonLuz\NanoTask\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrisonluzNanotaskTasks3 extends Migration
{
    public function up()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
