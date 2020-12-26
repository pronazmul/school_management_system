<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('date_of_birth', 30);
            $table->string('religion', 20);
            $table->string('mobile', 15);
            $table->string('date_of_join', 30);
            $table->string('status', 15);
            $table->string('last_login_date', 30);
            $table->string('last_login_ip', 40);
            $table->string('photo', 200);
            $table->string('national_id', 20);
            $table->string('blood_group', 10);
            $table->string('parent_id', 40);
            $table->string('login_id', 40);
            $table->string('login_password', 200);
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
