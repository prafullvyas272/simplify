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
        Schema::table('brevo_list_ids', function (Blueprint $table) {
            $table->integer('assessment_complete_template_id')->before('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('brevo_list_ids', function (Blueprint $table) {
            $table->dropColumn('assessment_complete_template_id');
        });
    }
};
