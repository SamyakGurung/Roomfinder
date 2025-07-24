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
      Schema::create('listings', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->integer('price');
    $table->string('currency')->default('Rs.');
    $table->string('location_city');
    $table->string('location_area')->nullable();
    $table->string('room_type');
    $table->string('image_url')->nullable();
    $table->text('description')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
