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
        Schema::create('anime', function (Blueprint $table) {
            $table->integer("id")->autoIncrement()->unique();
            $table->string('name');
            $table->string('description', 2000)->nullable();
            $table->string('genres')->nullable();
            $table->string('theme')->nullable();
            $table->string('original_name')->nullable();
            $table->string('link')->nullable();
            $table->string('manga_link')->nullable();
            $table->integer("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime');
    }
};
