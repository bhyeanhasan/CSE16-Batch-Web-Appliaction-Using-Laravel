<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{

    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('notice_by');
            $table->string('notice_heading');
            $table->string('notice_body');
            $table->string('notice_link');
            $table->string('notice_picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
