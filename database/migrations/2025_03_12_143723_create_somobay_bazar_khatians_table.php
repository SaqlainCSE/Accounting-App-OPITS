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
        Schema::create('somobay_bazar_khatians', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('product_name')->nullable();
            $table->string('category')->comment('10 = Kroy, 11 = Bikroy');
            $table->string('present_stock')->nullable();
            $table->string('product_count')->nullable();
            $table->decimal('product_price', 10, 5)->nullable();
            $table->decimal('total_amount', 10, 5)->nullable();
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
        Schema::dropIfExists('somobay_bazar_khatians');
    }
};
