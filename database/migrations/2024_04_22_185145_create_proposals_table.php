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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor( \App\Models\User::class , "student_id");
            $table->foreignIdFor(\App\Models\User::class, "coach_id");
            $table->text("cover_letter");
            $table->unsignedTinyInteger("hours");
            $table->string("status");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
