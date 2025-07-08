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
        Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->foreignId('listing_id')->constrained('listings')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // tenant
                $table->date('start_date');
                $table->date('end_date');
                $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
