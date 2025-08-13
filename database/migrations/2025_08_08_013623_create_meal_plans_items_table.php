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
        Schema::create('meal_plans_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meal_plan_id'); // Foreign key to meal_plans table
            $table->string('item_name'); // Name of the meal item
            $table->text('description')->nullable(); // Optional description of the meal item
            $table->decimal('calories', 8, 2)->nullable(); // Optional calories for the meal item
            $table->decimal('protein', 8, 2)->nullable(); // Optional protein content
            $table->decimal('carbohydrates', 8, 2)->nullable(); // Optional carbohydrates content
            $table->decimal('fats', 8, 2)->nullable(); // Optional fats content

            // Foreign key constraint
            $table->foreign('meal_plan_id')->references('id')->on('meal_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plans_items');
    }
};
