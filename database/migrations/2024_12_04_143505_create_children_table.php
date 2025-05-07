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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class,'user_id');
            $table->string("child_name")->nullable();
            $table->unsignedBigInteger("school_id")->nullable();
            $table->string("grade")->nullable();
            $table->string("other_school_name")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("gender")->nullable();
            $table->enum("payment_status", ['pending', 'paid', 'failed'])->nullable();
            $table->string("style_type")->nullable();
            $table->unsignedTinyInteger("dominant_percentage")->nullable();
            $table->unsignedTinyInteger("influential_percentage")->nullable();
            $table->unsignedTinyInteger("supportive_percentage")->nullable();
            $table->unsignedTinyInteger("cautious_percentage")->nullable();
            $table->string("disc_assessment_link")->nullable();
            $table->string("learn_assessment_link")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
