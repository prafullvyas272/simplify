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
        Schema::create('simplify_child_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class,'user_id');
            $table->foreignIdFor(\App\Models\simplifyParentDetail::class,'simplify_parent_id');
            $table->string("child_first_name")->nullable();
            $table->string("child_last_name")->nullable();
            $table->string("relationship_to_child")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("school_name")->nullable();
            $table->string("other_school")->nullable();
            $table->string("grade")->nullable();
            $table->string("gender")->nullable();
            $table->string("key_interests")->nullable();
            $table->string("learning_goals")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simplify_child_details');
    }
};
