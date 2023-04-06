<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ComCode;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'JENIS_DISABILITAS_TP_01', 'code_nm' => 'Tuna daksa/cacat tubuh', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_02', 'code_nm' => 'Tuna netra/buta', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_04', 'code_nm' => 'Tuna rungu', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_05', 'code_nm' => 'Tuna wicara', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_06', 'code_nm' => 'Tuna rungu dan wicara', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_07', 'code_nm' => 'Tuna netra dan cacat tubuh', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_08', 'code_nm' => 'Tuna netra, rungu dan wicara', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_09', 'code_nm' => 'Tuna rungu, wicara dan cacat tubuh', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_10', 'code_nm' => 'Tuna rungu, wicara, netra dan cacat tubuh', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_11', 'code_nm' => 'Cacat mental retardasi', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_12', 'code_nm' => 'Mantan penderita gangguan jiwa', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_DISABILITAS_TP_13', 'code_nm' => 'Cacat tubuh dan mental', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_01', 'code_nm' => 'Tidak ada biaya', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_02', 'code_nm' => 'Tidak mau sekolah', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_03', 'code_nm' => 'Bekerja ', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_04', 'code_nm' => 'Menikah ', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_05', 'code_nm' => 'Meninggal ', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_06', 'code_nm' => 'Pondok ', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'ALASAN_TP_07', 'code_nm' => 'Lainnya  ', 'code_group' => 'ALASAN_TP', 'code_value' => ''],
            ['code_cd' => 'SEKOLAH_TP_01', 'code_nm' => 'Sekolah Formal', 'code_group' => 'SEKOLAH_TP', 'code_value' => ''],
            ['code_cd' => 'SEKOLAH_TP_02', 'code_nm' => 'Sekolah Non Formal (Kejar Paket)', 'code_group' => 'SEKOLAH_TP', 'code_value' => ''],
            ['code_cd' => 'PENDIDIKAN_TP_01', 'code_nm' => 'SD/Sederajat', 'code_group' => 'PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'PENDIDIKAN_TP_02', 'code_nm' => 'SMP/Sederajat', 'code_group' => 'PENDIDIKAN_TP', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
