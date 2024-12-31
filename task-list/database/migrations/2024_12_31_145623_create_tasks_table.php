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
        Schema::create(table: 'tasks', callback: function (Blueprint $table): void {
            $table->id();

            $table->string(column: 'title');
            $table->text(column: 'description');
            $table->text(column: 'long_description')->nullable();
            $table->boolean(column: 'completed')->default(value: false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'tasks');
    }
};
