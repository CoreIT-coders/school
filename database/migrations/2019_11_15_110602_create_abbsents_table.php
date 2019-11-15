<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbbsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abbsents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('abbsent')->unsigned()->nullable();
            $table->integer('vacation')->unsigned()->nullable();
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            // Foregin key
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abbsents');
    }
}
