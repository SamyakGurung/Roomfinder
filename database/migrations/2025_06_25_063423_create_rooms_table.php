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
        Schema::create('rooms', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // landlord
        $table->string('room_number');
        $table->string('location');
        $table->string('type');
        $table->text('description')->nullable();
        $table->decimal('price', 8, 2);
        $table->integer('floor')->nullable();
        $table->integer('capacity')->default(1);
        $table->boolean('is_available')->default(true);
        $table->string('image')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
