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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            // Two choices: create Id column, then relationship
            // $table->unsignedBigInteger('book_id');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            // or create the column and relationship in one go
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();

            $table->text('review');
            $table->unsignedInteger('rating');

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
