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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string("status");
            $table->string("description")->nullable();
            $table->date("due_at")->nullable();

            $table->foreignIdFor(\App\Models\User::class );
            $table->foreignIdFor(\App\Models\User::class , "assigned_by")->nullable();
            $table->foreignIdFor(\App\Models\CoachUser::class , "coach_user_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
