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
        Schema::table('white_listed_users', function (Blueprint $table) {
            $table->string('partner_name')->nullable();
            $table->string('partner_surname')->nullable();
            $table->string('partner_email')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('white_listed_users', function (Blueprint $table) {
            $table->dropColumn('partner_name');
            $table->dropColumn('partner_surname');
            $table->dropColumn('partner_email');

        });
    }
};
