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
        Schema::create('coach_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->dateTime("from_date");
            $table->dateTime("to_date");

            $table->string("status");
            $table->unsignedBigInteger("rate")->nullable();

            $table->foreignIdFor(\App\Models\User::class , "coach_id");
            $table->foreignIdFor(\App\Models\User::class , "student_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_user');
    }
};
