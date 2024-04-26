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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('majors');
            $table->String('work_experience');
            $table->String('attended');
            $table->String('skills');
            $table->string('email');
            $table->string('password');
            $table->string('username');
            $table->string('nationality');
            $table->String('gender');
            $table->String('Additional_information')->nullable();
            $table->String('Hobbys')->nullable();
            $table->Integer('age');
            $table->String('image')->nullable();
            $table->String('about')->nullable();
            $table->String('description')->nullable();
            $table->String('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
