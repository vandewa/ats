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
        Schema::create('ats_pendataans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ats_id');
            $table->string('ats_st');
            $table->string('alasan_tp')->nullable();
            $table->string('minat_sekolah_st')->nullable();
            $table->string('sekolah_tp')->nullable()->comment("jika minat sekolah masuk ke mana");
            $table->string('nama_sekolah')->nullable()->comment("jika minat sekolah masuk ke mana");
            $table->string('kelas')->nullable()->comment("jika minat sekolah masuk ke mana");
            $table->string('disabilitas_st')->nullable()->comment("Jika anak disabilitas");
            $table->string('jenis_disabilitas_tp')->nullable()->comment("Jika anak disabilitas");
            $table->longText('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ats_pendataans');
    }
};
