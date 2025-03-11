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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_no')->unique();
            $table->string('member_name')->nullable();
            $table->string('member_father_name')->nullable();
            $table->string('member_mother_name')->nullable();
            $table->string('member_nid')->nullable();
            $table->string('member_address')->nullable();
            $table->string('member_profession')->nullable();
            $table->string('member_nominee_name')->nullable();
            $table->string('nominee_nid')->nullable();
            $table->string('nominee_relation')->nullable();
            $table->string('image')->nullable();
            $table->date('membership_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
