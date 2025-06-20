<?php

use App\Enums\AssessmentStatus;
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
        Schema::table('assessment_invites', function (Blueprint $table) {
            $table->boolean('second_term_invite_sent')->default(false)->after('child_name');
            $table->boolean('second_term_assessment_status')->default(false)->after('child_name');
            $table->boolean('third_term_invite_sent')->default(false)->after('child_name');
            $table->boolean('third_term_assessment_status')->default(false)->after('child_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessment_invites', function (Blueprint $table) {
            $table->dropColumn('second_term_invite_sent');
            $table->dropColumn('second_term_assessment_status');
            $table->dropColumn('third_term_invite_sent');
            $table->dropColumn('third_term_assessment_status');
        });
    }
};
