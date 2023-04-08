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
        Schema::create('ats_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ats_id');
            $table->string('region_kec')->nullable();
            $table->string('region_kel')->nullable();
            $table->string('dusun')->nullable();
            $table->string('rw')->nullable();
            $table->string('rt')->nullable();
            $table->unsignedBigInteger('creator_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ats_addresses');
    }
};
