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
        Schema::create('simplify_parent_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class,'user_id');
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("email")->nullable();
            $table->integer("country_id")->nullable();
            $table->integer("timezone_id")->nullable();
            $table->string("phone_number")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("partner_first_name")->nullable();
            $table->string("partner_last_name")->nullable();
            $table->string("partner_email")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simplify_parent_details');
    }
};
