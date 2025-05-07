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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("type");
            $table->foreignIdFor(\App\Models\User::class);
            $table->unsignedInteger("units")->default(1);
            $table->unsignedInteger("unit_price");
            $table->unsignedInteger('total_amount');
            $table->string('status');
            $table->foreignIdFor(\App\Models\User::class , "paid_to")->nullable();

            //if it's paid for specific session
            $table->foreignIdFor(\App\Models\CoachUser::class , "coach_user_id")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
