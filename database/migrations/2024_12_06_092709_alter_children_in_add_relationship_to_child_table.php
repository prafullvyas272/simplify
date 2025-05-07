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
        Schema::table('children', function (Blueprint $table) {
            $table->string("relationship_to_child")->after('style_type')->nullable();
            $table->string("key_interests")->after('style_type')->nullable();
            $table->string("learning_goals")->after('style_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('children', function (Blueprint $table) {
            $table->dropColumn('relationship_to_child','key_interests','learning_goals');
        });
    }
};
