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
        Schema::create('timezones', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Name of the timezone (e.g., 'United Arab Emirates')
            $table->string('identifier');  // Timezone identifier (e.g., 'Asia/Dubai')
            $table->string('offset');  // Timezone offset (e.g., 'GMT+4')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timezones');
    }
};
