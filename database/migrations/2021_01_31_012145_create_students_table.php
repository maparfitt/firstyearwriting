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
            $table->string('section');
            $table->string('fname');
            $table->string('lname');
            $table->string('goesBy')->nullable();
            $table->string('BUID');
            $table->string('email')->unique();
            $table->string('lfa')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('accommodations')->default(0);   
            $table->string('photoURL')->nullable();
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
