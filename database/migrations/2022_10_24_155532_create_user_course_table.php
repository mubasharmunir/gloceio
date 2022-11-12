<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_course', function (Blueprint $table) {
            $table->id();
            // $table->integer('form_id')->unsigned();
            // $table->integer('course_id')->unsigned();
            // $table->foreign('form_id')->references('id')->on('form')->onDelete('cascade');
            // $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('course_id')->constrained('cources');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_course');
    }
};
