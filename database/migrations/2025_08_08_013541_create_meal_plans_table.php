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
        Schema::create('meal_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); // Foreign key to clients table
            $table->unsignedBigInteger('nutritionist_id'); // Foreign key to nutritionists table
            $table->date('start_date'); // Start date of the meal plan
            $table->date('end_date'); // End date of the meal plan
            $table->text('description')->nullable(); // Optional description of the meal plan
            $table->boolean('is_active')->default(true); // Default status is active

            // Foreign key constraints
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('nutritionist_id')->references('id')->on('nutritionists')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plans');
    }
};
