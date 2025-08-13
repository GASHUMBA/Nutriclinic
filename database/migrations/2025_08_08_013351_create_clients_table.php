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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the client
            $table->string('email')->unique(); // Unique email for the client
            $table->string('password'); // Password for the client
            $table->string('phone_number')->nullable(); // Optional phone number for the client
            $table->date('date_of_birth')->nullable(); // Optional date of birth for the client
            $table->string('address')->nullable(); // Optional address for the client
            $table->boolean('is_active')->default(true); // Default status is active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
