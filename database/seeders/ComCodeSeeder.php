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
            ['code_cd' => 'JENIS_DISABILITAS_TP_01', 'code_nm' => 'A - Netra', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'A'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_02', 'code_nm' => 'B - Rungu', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'B'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_04', 'code_nm' => 'C - Grahita Ringan', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'C'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_05', 'code_nm' => 'C1 - Grahita Sedang', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'C1'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_06', 'code_nm' => 'D - Daksa Ringan', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'D'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_07', 'code_nm' => 'D1 - Daksa Sedang', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'D1'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_08', 'code_nm' => 'E - Laras', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'E'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_09', 'code_nm' => 'F - Wicara', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'F'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_10', 'code_nm' => 'H - Hyperaktif', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'H'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_11', 'code_nm' => 'I - Cerdas Istimewa', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'I'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_12', 'code_nm' => 'J - Bakat Istimewa', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'J'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_13', 'code_nm' => 'K - Kesulitan Belajar', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'K'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_14', 'code_nm' => 'N - Narkoba', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'N'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_15', 'code_nm' => 'O - Indigo', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'O'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_16', 'code_nm' => 'P - Down Syndrome', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'P'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_17', 'code_nm' => 'Q - Autis', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => 'Q'],
            ['code_cd' => 'JENIS_DISABILITAS_TP_18', 'code_nm' => 'Lainnya', 'code_group' => 'JENIS_DISABILITAS_TP', 'code_value' => ''],
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
            ['code_cd' => 'PENDIDIKAN_TP_03', 'code_nm' => 'SMA/Sederajat', 'code_group' => 'PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'PENDIDIKAN_TP_04', 'code_nm' => 'Tidak Punya Ijazah', 'code_group' => 'PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'PENDIDIKAN_TP_05', 'code_nm' => '#N/A', 'code_group' => 'PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'ATS_ST_01', 'code_nm' => 'Ya', 'code_group' => 'ATS_ST', 'code_value' => ''],
            ['code_cd' => 'ATS_ST_02', 'code_nm' => 'Tidak', 'code_group' => 'ATS_ST', 'code_value' => ''],
            ['code_cd' => 'MINAT_SEKOLAH_ST_01', 'code_nm' => 'Ya', 'code_group' => 'MINAT_SEKOLAH_ST', 'code_value' => ''],
            ['code_cd' => 'MINAT_SEKOLAH_ST_02', 'code_nm' => 'Tidak', 'code_group' => 'MINAT_SEKOLAH_ST', 'code_value' => ''],
            ['code_cd' => 'DISABILITAS_ST_01', 'code_nm' => 'Ya', 'code_group' => 'DISABILITAS_ST', 'code_value' => ''],
            ['code_cd' => 'DISABILITAS_ST_02', 'code_nm' => 'Tidak', 'code_group' => 'DISABILITAS_ST', 'code_value' => ''],
            ['code_cd' => 'KAWIN_ST_01', 'code_nm' => 'Tidak Kawin', 'code_group' => 'KAWIN_ST', 'code_value' => ''],
            ['code_cd' => 'KAWIN_ST_02', 'code_nm' => 'Kawin', 'code_group' => 'KAWIN_ST', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_TP_01', 'code_nm' => 'Laki-laki', 'code_group' => 'JENIS_KELAMIN_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_TP_02', 'code_nm' => 'Perempuan', 'code_group' => 'JENIS_KELAMIN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_01', 'code_nm' => 'PKBM/SKB/PONPES', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_02', 'code_nm' => 'SD/MI', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_03', 'code_nm' => 'SMP/MTS', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_04', 'code_nm' => 'SMA/MA', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_05', 'code_nm' => 'SMK/MK', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENJANG_PENDIDIKAN_TP_06', 'code_nm' => 'UNIVERSITAS', 'code_group' => 'JENJANG_PENDIDIKAN_TP', 'code_value' => ''],
            ['code_cd' => 'STATUS_SEKOLAH_TP_01', 'code_nm' => 'NEGERI', 'code_group' => 'STATUS_SEKOLAH_TP', 'code_value' => ''],
            ['code_cd' => 'STATUS_SEKOLAH_TP_02', 'code_nm' => 'SWASTA', 'code_group' => 'STATUS_SEKOLAH_TP', 'code_value' => ''],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_01",
                "code_nm" => "KB",
                "code_value" => "KB",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_02",
                "code_nm" => "KKNI Level 1",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_03",
                "code_nm" => "KKNI Level 2",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_04",
                "code_nm" => "KKNI Level 3",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_05",
                "code_nm" => "KKNI Level 4",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_06",
                "code_nm" => "KKNI Level 5",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_07",
                "code_nm" => "Paket/Gaya",
                "code_value" => "Kursus",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_08",
                "code_nm" => "Kelas 10",
                "code_value" => "MA",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_09",
                "code_nm" => "Kelas 11",
                "code_value" => "MA",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_10",
                "code_nm" => "Kelas 7",
                "code_value" => "MTs",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_11",
                "code_nm" => "Kelas 8",
                "code_value" => "MTs",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_12",
                "code_nm" => "Kelas 9",
                "code_value" => "MTs",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_13",
                "code_nm" => "Tingkatan 2, Kls 5",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_14",
                "code_nm" => "Tingkatan 2, Kls 6",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_15",
                "code_nm" => "Tingkatan 3, Kls 7",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_16",
                "code_nm" => "Tingkatan 3, Kls 8",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_17",
                "code_nm" => "Tingkatan 4",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_18",
                "code_nm" => "Tingkatan 4, Kls 9",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_19",
                "code_nm" => "Tingkatan 5, Kls 10",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_20",
                "code_nm" => "Tingkatan 5, Kls 11",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_21",
                "code_nm" => "Tingkatan 6",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_22",
                "code_nm" => "Tingkatan 6, Kls 12",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_23",
                "code_nm" => "Usaha Mandiri",
                "code_value" => "PKBM",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_24",
                "code_nm" => "Kelompok A",
                "code_value" => "RA",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_25",
                "code_nm" => "Kelompok B",
                "code_value" => "RA",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_26",
                "code_nm" => "Kelas 1",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_27",
                "code_nm" => "Kelas 2",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_28",
                "code_nm" => "Kelas 3",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_29",
                "code_nm" => "Kelas 4",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_30",
                "code_nm" => "Kelas 5",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_31",
                "code_nm" => "Kelas 6",
                "code_value" => "SD",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_32",
                "code_nm" => "Dasar",
                "code_value" => "SKB",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_33",
                "code_nm" => "Tingkatan 1",
                "code_value" => "SKB",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_34",
                "code_nm" => "Tingkatan 1, Kls 2",
                "code_value" => "SKB",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_35",
                "code_nm" => "Tingkatan 2, Kls 4",
                "code_value" => "SKB",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_36",
                "code_nm" => "Kelas 12",
                "code_value" => "SMK",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_37",
                "code_nm" => "Kelas 13",
                "code_value" => "SMK",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_38",
                "code_nm" => "SPS",
                "code_value" => "SPS",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_39",
                "code_nm" => "TPA",
                "code_value" => "TPA",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_40",
                "code_nm" => "Perguruan Tinggi",
                "code_value" => "Universitas",
                "code_group" => "SEKOLAH_TERAKHIR_TP",
            ],
            [
                "code_cd" => "SEKOLAH_TERAKHIR_TP_41",
                "code_nm" => "#N/A",
                "code_value" => "#N/A",
                "code_group" => "#N/A",
            ]
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}