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
        Schema::create('child_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Child::class,'child_id');
            $table->enum("type", ['disc','learn'])->nullable();
            $table->text('answere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_answers');
    }
};
