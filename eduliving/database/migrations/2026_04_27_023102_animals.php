<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('question')->nullable(false);
            $table->text('answers')->nullable(false);
            $table->text('false_answer_1')->nullable(false);
            $table->text('false_answer_2')->nullable(false);
            $table->text('false_answer_3')->nullable(false);
            $table->unsignedBigInteger('species_id');
            $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
