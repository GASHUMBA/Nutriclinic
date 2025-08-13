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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the patient
            $table->string('email')->unique(); // Unique email for the patient
            $table->string('password'); // Password for the patient
            $table->string('phone_number')->nullable(); // Optional phone number for the patient
            $table->date('date_of_birth')->nullable(); // Optional date of birth for the patient
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
