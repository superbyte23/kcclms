<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('classcode', 8);
            $table->string('classname', 255);
            $table->text('description');
            $table->integer('courseid');
            $table->integer('courselevelid');
            $table->integer('subjectid');
            $table->string('colourvariant', 50);
            $table->string('avatar', 255);
            $table->integer('instructor_id');
            $table->string('status', 10);
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
        Schema::dropIfExists('classrooms');
    }
}
