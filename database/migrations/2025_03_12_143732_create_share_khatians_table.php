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
        Schema::create('share_khatians', function (Blueprint $table) {
            $table->id();
            $table->string('member_no');
            $table->string('member_name');
            $table->string('share_number')->nullable();
            $table->string('share_total_price')->nullable();
            $table->string('share_kisti_aday_amount')->nullable();
            $table->string('share_kisti_aday_date')->nullable();
            $table->string('share_return_amount')->nullable();
            $table->string('share_return_date')->nullable();
            $table->string('baki')->nullable();
            $table->text('comments')->nullable();
            $table->string('user_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_khatians');
    }
};
