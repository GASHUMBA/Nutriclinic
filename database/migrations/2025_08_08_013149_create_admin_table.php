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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the admin
            $table->string('email')->unique(); // Unique email for the admin
            $table->string('password'); // Password for the admin
            $table->string('role')->default('admin'); // Default role is 'admin'
            $table->boolean('is_active')->default(true); // Default status is active
            $table->string('profile_picture')->nullable(); // Optional profile picture
            $table->timestamp('email_verified_at')->nullable(); // For email verification
            $table->timestamps();
            $table->softDeletes(); // Soft delete column for the admin
            $table->timestamp('created_at')->useCurrent(); // Timestamp for when the admin was created
            $table->timestamp('updated_at')->useCurrent()->nullable(); // Timestamp for when the admin was last updated
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->string('permissions')->default('all'); // Permissions assigned to the admin
            $table->text('notes')->nullable(); // Optional notes for the admin
            $table->string('department')->nullable(); // Optional department for the admin
            $table->string('contact_number')->nullable(); // Optional contact number for the admin
            $table->string('address')->nullable(); // Optional address for the admin
            $table->string('status')->default('active'); // Status of the admin (e.g., active, inactive)
            $table->dateTime('last_login_at')->nullable(); // Timestamp for the last login of the admin
            $table->string('last_login_ip')->nullable(); // IP address of the last login
            $table->string('two_factor_auth')->default('disabled'); // Two-factor authentication status
            $table->string('language_preference')->default('en'); // Language preference for the admin
            $table->string('timezone')->default('UTC'); // Timezone for the admin
            $table->boolean('is_super_admin')->default(false); // Flag to indicate if the admin is a super admin
            $table->boolean('receive_notifications')->default(true); // Flag to indicate if the admin receives notifications
            $table->string('notification_preferences')->default('email'); // Notification preferences (e.g., email, SMS)
            $table->string('api_token')->nullable(); // Optional API token for the admin
            $table->string('last_action')->nullable(); // Last action performed by the admin
            $table->timestamp('last_action_at')->nullable(); // Timestamp for the last action performed by the admin
            $table->string('session_id')->nullable(); // Session ID for the admin's current session
            $table->string('login_method')->default('web'); // Method of login (e.g., web, mobile)
            $table->string('profile_visibility')->default('public'); // Profile visibility setting (e.g., public, private)
            $table->string('theme_preference')->default('light'); // Theme preference for the admin interface
            $table->boolean('is_verified')->default(false); // Verification status of the admin
            $table->string('verification_token')->nullable(); // Token for email verification
            $table->timestamp('verification_token_expires_at')->nullable(); // Expiration time for the verification token
            $table->boolean('is_locked')->default(false); // Lock status of the admin account
            $table->integer('login_attempts')->default(0); // Number of login attempts
            $table->timestamp('last_failed_login_at')->nullable(); // Timestamp for the last failed login attempt
            $table->string('failed_login_ip')->nullable(); // IP address of the last failed login attempt
            $table->string('password_reset_token')->nullable(); // Token for password reset
            $table->timestamp('password_reset_token_expires_at')->nullable(); // Expiration time for the password reset token
            $table->boolean('is_email_subscribed')->default(true); // Email subscription status
            $table->string('email_subscription_preferences')->default('all'); // Email subscription preferences (e.g., all, none)
            $table->string('profile_visibility_setting')->default('public'); // Profile visibility setting (e.g., public, private)
            $table->string('notification_channel')->default('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
