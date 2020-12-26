<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date', 15);
            $table->string('class_id', 15);
            $table->string('course_id', 15);
            $table->string('student_id', 15);
            $table->string('teacher_id', 15);
            $table->string('status', 15);
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
