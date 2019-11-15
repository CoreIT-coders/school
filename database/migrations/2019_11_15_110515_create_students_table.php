<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->bigInteger('classroom_id')->unsigned();
            $table->bigInteger('father_id')->unsigned();
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('degree_id')->unsigned();
            $table->bigInteger('activity_id')->unsigned();
            // Foregin key
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('father_id')->references('id')->on('fathers');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('degree_id')->references('id')->on('degrees');
            $table->foreign('activity_id')->references('id')->on('activities');

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
        Schema::dropIfExists('students');
    }
}
