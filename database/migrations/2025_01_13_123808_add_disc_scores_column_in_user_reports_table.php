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
        Schema::table('user_reports', function (Blueprint $table) {
            $table->json('disc_scores')->nullable()->after('style');
            $table->json("learn_scores")->nullable()->after('style');
            $table->string('learn_style')->nullable()->after('style');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_reports', function (Blueprint $table) {
            $table->dropColumn('disc_scores');
            $table->dropColumn('learn_scores');
            $table->dropColumn('learn_style');
        });
    }
};
