<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_ml_id')->unsigned();

            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('path')->nullable();
            $table->string('content')->nullable();
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');

            $table->foreign('course_ml_id')->references('id')->on('courses_multi_languages');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('lesson_quiz', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('quiz_id')
                ->constrained()
                ->onDelete('cascade');
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
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('lesson_quiz');
    }
}
