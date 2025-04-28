<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get all users
        $users = DB::table('users')->get();

        // Update each user's password to use Bcrypt
        foreach ($users as $user) {
            // Check if the password is not already using Bcrypt
            // Bcrypt passwords start with $2y$
            if (!str_starts_with($user->password, '$2y$')) {
                // Update the password with Bcrypt hash
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => Hash::make($user->password)]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Cannot reverse this migration as we cannot retrieve the original passwords
    }
};