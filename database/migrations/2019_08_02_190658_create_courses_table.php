<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->unique();
            // $table->bigInteger('teacher_id')->unsigned();
            $table->string('course_path')->nullable();
            $table->enum('course_type', ['free', 'subscription', 'paid-subscription'])->default('free');
            $table->integer('batch')->nullable();
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            // $table->timestamp('started_at')->nullable();
            // $table->timestamp('finished_at')->nullable();

            // $table->foreign('teacher_id')->references('id')->on('users');

            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
