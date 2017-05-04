<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseCouter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_couter', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->integer('counter')->default(0);
            $table->date('date');
            $table->timestamps();
            $table->primary(array('course_id', 'date'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_couter');
    }
}
