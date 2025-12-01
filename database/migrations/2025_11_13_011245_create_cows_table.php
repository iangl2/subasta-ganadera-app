<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      public function up(): void {
        Schema::create('cows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('weight', 8, 2);
            $table->string('sex');
            $table->string('breed');
            $table->string('status')->default('available');
            $table->string('image')->nullable(); // path to image
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cows');
    }
};
