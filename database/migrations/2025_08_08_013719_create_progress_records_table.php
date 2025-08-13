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
        Schema::create('progress_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); // Foreign key to clients table
            $table->date('recorded_at'); // Date of the progress record
            $table->decimal('weight', 8, 2)->nullable(); // Optional weight of the client
            $table->decimal('body_fat_percentage', 5, 2)->nullable(); // Optional body fat percentage
            $table->text('notes')->nullable(); // Optional notes for the progress record

            // Foreign key constraint
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('progress_record_items', function (Blueprint $table) {

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_records');
    }
};
