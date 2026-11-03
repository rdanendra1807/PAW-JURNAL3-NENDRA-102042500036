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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
<<<<<<< HEAD
            $table->integer('expiration')->index();
=======
            $table->integer('expiration');
>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
<<<<<<< HEAD
            $table->integer('expiration')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
=======
            $table->integer('expiration');
        });
    }

>>>>>>> 9bd941d (Commit Setup CeLOE LMS)
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
