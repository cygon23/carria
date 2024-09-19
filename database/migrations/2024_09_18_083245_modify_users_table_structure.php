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
        Schema::table('users', function (Blueprint $table) {
            // Modify existing columns
            $table->string('name', 100)->change();
            $table->string('email', 255)->nullable()->change();

            // Add new columns
            $table->string('phone', 20)->nullable();
            $table->string('department', 200);
            $table->string('languages', 200);
            $table->text('bio');
            $table->string('profile_image_url', 255);
            $table->binary('cv')->nullable();
            $table->string('target_role', 100)->nullable();
            $table->enum('subscription_type', ['Free', 'Premium'])->default('Free');
            $table->enum('user_type', ['admin', 'company', 'job_seeker']);
            $table->enum('status', ['active', 'inactive'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert the changes made in the up() method
            $table->string('name')->change();
            $table->string('email')->unique()->change();

            // Drop the newly added columns
            $table->dropColumn([
                'phone',
                'department',
                'languages',
                'bio',
                'profile_image_url',
                'cv',
                'target_role',
                'subscription_type',
                'user_type',
                'status',
            ]);
        });
    }
};
