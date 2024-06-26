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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('avatar')->nullable()->default('avatars/default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('last_seen')->nullable();
            $table->string('role')->nullable()->default(3);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
