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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('animal_name')->nullable(false);
            $table->text('image')->nullable(false);
            $table->text('latin_name')->nullable(false);
            $table->text('species')->nullable(false);
            $table->text('habitat')->nullable(false);
            $table->text('continent')->nullable(false);
            $table->text('description')->nullable(false);
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
