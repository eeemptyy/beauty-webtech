<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestMigrationset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table)
        {
            $table->foreign('role_id')
                ->references('id')
                ->on('roles');
        });

        Schema::table('histories', function($table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
        });
        Schema::table('courses', function($table)
        {
            $table->foreign('type_id')->references('id')->on('course_types');
        });
        Schema::table('course_couters', function($table)
        {
            $table->foreign('course_id')->references('id')->on('courses');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
