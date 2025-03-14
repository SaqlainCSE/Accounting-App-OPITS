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
        Schema::create('sanchaya_khatians', function (Blueprint $table) {
            $table->id();
            $table->string('member_no');
            $table->string('member_name');
            $table->string('category')->comment('1 = Shadharon, 2 = Ponno, 3 = Mashik, 4 = Osthaye, 5 = Policy, 6 = Ekkalin');
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
        Schema::dropIfExists('sanchaya_khatians');
    }
};
