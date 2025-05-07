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
        Schema::create('pakages', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('strip_price_key')->nullable();
            $table->integer('price')->nullable();
            $table->enum('default_active', [0, 1])->default(0)->comment('0: Inactive, 1: active');
            $table->enum('type', ['one_time', 'assessments'])->nullable()->comment('one_time: One Time, assessments: 3 Assessments');
            $table->enum('status', [0, 1])->default(1)->nullable()->comment('0: Inactive, 1: active');
            $table->enum('using_type', ['kids', 'teen'])->nullable()->comment('kids: Kids, teen: Teen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakages');
    }
};
