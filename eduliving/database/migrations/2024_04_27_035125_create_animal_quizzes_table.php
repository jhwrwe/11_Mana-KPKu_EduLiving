<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('animal_quizzes', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //         $table->unsignedBigInteger('animals');
    //         $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
    //         $table->unsignedBigInteger('quizzes_id');

    //         $table->foreign('quizzes_id')->references('id')->on('quizzes')->onDelete('cascade');

    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('animal_quizzes');
    // }
};
