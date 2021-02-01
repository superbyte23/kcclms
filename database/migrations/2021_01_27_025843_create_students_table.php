<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->string('first_name', 100); 
            $table->string('last_name', 100);
            $table->string('middle_name', 100);
            $table->string('suffix', 100)->nullable();
            $table->text('address');
            $table->string('gender', 20);
            $table->date('dob');
            $table->integer('age');
            $table->string('birth_place', 100);
            $table->string('religion', 100);
            $table->string('civil_status', 100);
            $table->string('nationality', 100);
            $table->string('mobile', 100);
            $table->text('fb_account');
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
