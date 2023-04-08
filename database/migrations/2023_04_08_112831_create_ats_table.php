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
        Schema::create('ats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_kk')->nullable();
            $table->string('nik_kk')->nullable();
            $table->string('tempat_lahir_kk')->nullable();
            $table->date('tanggal_lahir_kk')->nullable();
            $table->string('pendidikan_tp')->nullable()->comment("pendidikan terakhir");
            $table->string('kelas')->nullable()->comment("kelas terakhir");
            $table->unsignedBigInteger('creator_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ats');
    }
};
