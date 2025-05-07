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
        if (!Schema::hasTable('simplify_wa_sign_up')) {
            Schema::create('simplify_wa_sign_up', function (Blueprint $table) {
                $table->id();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->nullable();
                $table->string('country')->nullable();
                $table->string('timezone')->nullable();
                $table->string('country_code', 10)->nullable();
                $table->string('phone')->nullable();
                $table->string('partner_name')->nullable();
                $table->string('partner_email')->nullable();
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simplify_wa_sign_up');
    }
};
