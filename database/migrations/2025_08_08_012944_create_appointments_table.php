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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->dateTime('appointment_date'); // Date and time of the appointment
            $table->string('status')->default('scheduled'); // Status of the appointment (e.g., scheduled, completed, cancelled)
            $table->text('notes')->nullable(); // Optional notes for the appointment
            $table->string('location')->nullable(); // Optional location for the appointment
            $table->string('type')->default('in-person'); // Type of appointment (e.g., in-person, virtual)
            $table->string('reminder')->default('24 hours'); // Default reminder time before the appointment
            $table->timestamp('updated_at')->useCurrent()->nullable(); // Timestamp for when the appointment was last updated
            $table->softDeletes(); // Soft delete column for the appointment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
