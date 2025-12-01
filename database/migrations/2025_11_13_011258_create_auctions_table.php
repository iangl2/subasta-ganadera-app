<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cow_id')->constrained('cows')->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('status')->default('open');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('starting_price', 10, 2);
            $table->string('location');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('auctions');
    }
};

