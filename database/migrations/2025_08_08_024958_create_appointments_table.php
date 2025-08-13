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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // link to users table
            $table->dateTime('appointment_date');
            $table->string('status')->default('scheduled');
            $table->text('notes')->nullable();
            $table->string('location')->nullable();
            $table->string('type')->default('in-person');
            $table->string('reminder')->default('24 hours');

            $table->timestamps(); // creates created_at & updated_at
            $table->softDeletes(); // optional: creates deleted_at
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
