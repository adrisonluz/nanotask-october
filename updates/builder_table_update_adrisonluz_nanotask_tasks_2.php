<?php namespace AdrisonLuz\NanoTask\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrisonluzNanotaskTasks2 extends Migration
{
    public function up()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('update_at');
        });
    }
    
    public function down()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->dateTime('update_at');
        });
    }
}
