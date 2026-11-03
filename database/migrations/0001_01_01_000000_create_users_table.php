<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
    /**
     * Run the migrations.
     */
=======
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin'])->default('admin');
=======
            $table->string('role', 20)->default('mahasiswa');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

<<<<<<< HEAD
    /**
     * Reverse the migrations.
     */
=======
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
