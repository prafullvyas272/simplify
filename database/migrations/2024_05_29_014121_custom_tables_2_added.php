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
        Schema::create('disc_result', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user",255)->unique();
            $table->string("style");
            $table->text("category_result");
        });

        Schema::create('report_options', function (Blueprint $table) {
            $table->id();
            $table->string("name",255);
            $table->integer('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
