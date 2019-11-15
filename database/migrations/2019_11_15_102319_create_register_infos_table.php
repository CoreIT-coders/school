<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('studentName', 100);
            $table->string('stage', 100);
            $table->string('birthDay', 100);
            $table->string('oldSchool', 100);
            $table->string('fatherName', 100);
            //img location
            $table->string('identifierimg', 100);
            $table->string('porvIdentifierimg', 100)->nullable();
            $table->string('suppluCartimg', 100);
            $table->string('liveCartimg', 100);
            
            $table->bigInteger('school_id')->unsigned();
            // Foregin key
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('register_infos');
    }
}
