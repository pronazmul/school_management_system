<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name', 20);
            $table->string('exam_type', 20);
            $table->string('exam_date', 20);
            $table->string('student_id', 15);
            $table->string('teacher_id', 15);
            $table->string('course_id', 15);
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
