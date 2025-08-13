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
        Schema::create('nutritionists', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the nutritionist
            $table->string('email')->unique(); // Unique email for the nutritionist
            $table->string('password'); // Password for the nutritionist
            $table->string('phone_number')->nullable(); // Optional phone number for the nutritionist
            $table->date('date_of_birth')->nullable(); // Optional date of birth for the nutritionist
            $table->string('specialization')->nullable(); // Specialization of the nutritionist
            $table->boolean('is_active')->default(true); // Default status is active    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritionists');
    }
};
