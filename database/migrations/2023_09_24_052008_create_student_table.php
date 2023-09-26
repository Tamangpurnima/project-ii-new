<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
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
            $table->string('name');
            $table->string('email');
            $table->string('contact'); // Add contact column
            $table->integer('passedyear'); // Add passedyear column
            $table->string('previousschool'); // Add previousschool column
            $table->decimal('gpa', 3, 2); // Add gpa column
            $table->text('interest'); // Add interest column
            $table->text('goal'); // Add goal column
            $table->string('image')->nullable(); // Add image column
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
