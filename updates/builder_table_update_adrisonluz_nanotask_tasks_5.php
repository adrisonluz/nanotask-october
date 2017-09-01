<?php namespace AdrisonLuz\NanoTask\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrisonluzNanotaskTasks5 extends Migration
{
    public function up()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('adrisonluz_nanotask_tasks', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
