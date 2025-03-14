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
        Schema::create('korjo_khatians', function (Blueprint $table) {
            $table->id();
            $table->string('member_no');
            $table->string('member_name');
            $table->string('category')->comment('7 = Shaptahik, 8 = Doinik, 9 = Bishesh');
            $table->string('sanchaya_aday')->nullable();
            $table->string('asol_aday')->nullable();
            $table->string('munafa_aday')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('korjo_khatians');
    }
};
