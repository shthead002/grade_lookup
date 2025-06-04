<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examination_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examination_id');
            $table->foreign('examination_id')->references('id')->on('examinations');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('student_course_keys');
            $table->float('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examination_grades');
    }
};
