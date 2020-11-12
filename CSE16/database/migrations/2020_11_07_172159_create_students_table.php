<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('roll');
            $table->string('reg');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('blood_group');
            $table->date('birth_date');
            $table->string('bio');
            $table->string('profile_pic');
            $table->string('cover_pic');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
