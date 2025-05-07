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
        Schema::create('report_extract', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user",255)->unique();
            $table->text("data");
            $table->text("url");
        });

        Schema::create('chat_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user",255);
            $table->text("user_message");
            $table->text("bot_message");
            $table->timestamp("chat_time")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_history');
        Schema::dropIfExists('report_extract');

    }
};
