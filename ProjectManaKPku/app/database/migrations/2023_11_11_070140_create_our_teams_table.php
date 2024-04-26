<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        protected $fillable = ['name', 'title', 'date', 'major','image','description'];
    public function up(): void
    {
        Schema::create('our_teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('name');
            $table-> String('title');
            $table-> String('date');
            $table-> String('major');
            $table-> text('description');
            $table->text('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_teams');
    }
};
