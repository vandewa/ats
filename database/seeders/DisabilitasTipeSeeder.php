<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DisabilitasTipe;


class DisabilitasTipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('disabilitas_tipes')->truncate();
        $data = [
            [
                'id' => '1',
                'kode' => 'A',
                'translasi' => 'Penglihatan',
                'jenis' => 'A - Netra'
            ],
            [
                'id' => '2',
                'kode' => 'B',
                'translasi' => 'Pendengaran',
                'jenis' => 'B - Rungu'
            ],
            [
                'id' => '3',
                'kode' => 'C',
                'translasi' => 'Intelektual Ringan',
                'jenis' => 'C - Grahita Ringan'
            ],
            [
                'id' => '4',
                'kode' => 'C1',
                'translasi' => 'Intelektual Sedang',
                'jenis' => 'C1 - Grahita Sedang'
            ],
            [
                'id' => '5',
                'kode' => 'D',
                'translasi' => 'Fisik Ringan',
                'jenis' => 'D - Daksa Ringan'
            ],
            [
                'id' => '6',
                'kode' => 'D1',
                'translasi' => 'Fisik Sedang',
                'jenis' => 'D1 - Daksa Sedang'
            ],
            [
                'id' => '7',
                'kode' => 'E',
                'translasi' => 'Emosi',
                'jenis' => 'E - Laras'
            ],
            [
                'id' => '8',
                'kode' => 'F',
                'translasi' => 'Wicara',
                'jenis' => 'F - Wicara'
            ],
            [
                'id' => '9',
                'kode' => 'H',
                'translasi' => 'ADHD',
                'jenis' => 'H - Hyperaktif'
            ],
            [
                'id' => '10',
                'kode' => 'I',
                'translasi' => 'Cerdas Istimewa',
                'jenis' => 'I - Cerdas Istimewa'
            ],
            [
                'id' => '11',
                'kode' => 'J',
                'translasi' => 'Bakat Istimewa',
                'jenis' => 'J - Bakat Istimewa'
            ],
            [
                'id' => '12',
                'kode' => 'K',
                'translasi' => 'Lambat Belajar',
                'jenis' => 'K - Kesulitan Belajar'
            ],
            [
                'id' => '13',
                'kode' => 'N',
                'translasi' => 'Narkoba',
                'jenis' => 'N - Narkoba'
            ],
            [
                'id' => '14',
                'kode' => 'O',
                'translasi' => 'Indigo',
                'jenis' => 'O - Indigo'
            ],
            [
                'id' => '15',
                'kode' => 'P',
                'translasi' => 'Down Syndrome',
                'jenis' => 'P - Down Syndrome'
            ],
            [
                'id' => '16',
                'kode' => 'Q',
                'translasi' => 'Autis',
                'jenis' => 'Q - Autis'
            ]
        ];

        foreach ($data as $datum) {
            DisabilitasTipe::create($datum);
        }
    }
}
