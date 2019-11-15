<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            //img location
            $table->string('bookImg', 250);
            //URL for download
            $table->string('bookURL', 250);
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('classroom_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            // Foregin key
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
