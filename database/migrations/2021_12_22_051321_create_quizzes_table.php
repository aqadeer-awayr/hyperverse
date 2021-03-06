<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();

            // $table->foreignId('course_id')->nullable()
            //     ->constrained()
            //     ->onDelete('cascade');
            // $table->foreignId('lesson_id')->nullable()
            //     ->constrained()
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('quizzes');
    }
}
