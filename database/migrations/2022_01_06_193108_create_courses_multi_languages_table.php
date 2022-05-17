<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesMultiLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_multi_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('language_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            // $table->bigInteger('teacher_id')->unsigned();
            $table->string('course_path')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->enum('course_type', ['free', 'subscription', 'paid-subscription'])->default('free');
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
        Schema::dropIfExists('courses_multi_languages');
    }
}
