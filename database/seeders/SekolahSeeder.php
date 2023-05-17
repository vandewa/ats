<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('sekolahs')->truncate();
        $data = [
            [ 
                "no" => "1",
                "npsn" => "69931401",
                "nama sekolah" => "PPS. AL MARSHUF",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307030"
                
              ],
              [
                "no" => "2",
                "npsn" => "69931402",
                "nama sekolah" => "PPS. AL ALAWIYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "3",
                "npsn" => "69931403",
                "nama sekolah" => "PPS. DARUSSALIKHIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "4",
                "npsn" => "69931404",
                "nama sekolah" => "PPS. AL BAROKAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "5",
                "npsn" => "69931405",
                "nama sekolah" => "PPS. TANWIRUSSOBIR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "6",
                "npsn" => "69931406",
                "nama sekolah" => "PPS. AL ANWAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "7",
                "npsn" => "69931407",
                "nama sekolah" => "PPS. FATANUGRAHA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "8",
                "npsn" => "69937223",
                "nama sekolah" => "PDF ULYA AL-MUBAAROK MANGGISAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "9",
                "npsn" => "69951251",
                "nama sekolah" => "PPS Al Marshuf",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "10",
                "npsn" => "69951252",
                "nama sekolah" => "PPS Alawiyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "11",
                "npsn" => "69951253",
                "nama sekolah" => "PPS Darussalikin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "12",
                "npsn" => "69951254",
                "nama sekolah" => "PPS Al Aziziyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "13",
                "npsn" => "69951255",
                "nama sekolah" => "PPS Darul  Ulum",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "14",
                "npsn" => "69951256",
                "nama sekolah" => "PPS Roudlotul Muttaqin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "15",
                "npsn" => "69951257",
                "nama sekolah" => "PPS Al Mubarok",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "16",
                "npsn" => "69951258",
                "nama sekolah" => "PPS Al Barokah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "17",
                "npsn" => "69951259",
                "nama sekolah" => "PPS Tanwirusshobir",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "18",
                "npsn" => "69951260",
                "nama sekolah" => "PPS An Nidzhom",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "19",
                "npsn" => "69951261",
                "nama sekolah" => "PPS Daruttholibin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "20",
                "npsn" => "69951262",
                "nama sekolah" => "PPS Fata Nugraha",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "21",
                "npsn" => "69951263",
                "nama sekolah" => "PPS Al Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "22",
                "npsn" => "69951264",
                "nama sekolah" => "PPS Darunna im",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "23",
                "npsn" => "69951284",
                "nama sekolah" => "PPS Al Ukhuwah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "24",
                "npsn" => "69956422",
                "nama sekolah" => "PDF Wustho Al-Mubaarok Manggisan",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "25",
                "npsn" => "69957549",
                "nama sekolah" => "Al Ukhuwah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "26",
                "npsn" => "69957551",
                "nama sekolah" => "Al Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "27",
                "npsn" => "69957552",
                "nama sekolah" => "Daruttholibin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "28",
                "npsn" => "69971187",
                "nama sekolah" => "Darul Ulum",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "29",
                "npsn" => "69971188",
                "nama sekolah" => "As Syakirin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "30",
                "npsn" => "69971189",
                "nama sekolah" => "Roudlotuth Tholibin Waththulab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "31",
                "npsn" => "69971190",
                "nama sekolah" => "Salafiyah Al Khusna",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "32",
                "npsn" => "69984383",
                "nama sekolah" => "Muadalah Aliyah Pesantren Roudhotuththolibin Waththullab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "33",
                "npsn" => "69984392",
                "nama sekolah" => "Pesantren Roudhotuththolibin Waththullab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "34",
                "npsn" => "70024133",
                "nama sekolah" => "SPM. SALAF TAWANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "35",
                "npsn" => "P2963425",
                "nama sekolah" => "PKBM CATUR SAKTI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "36",
                "npsn" => "P2963555",
                "nama sekolah" => "PKBM SUMBER REJEKI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "37",
                "npsn" => "P2963717",
                "nama sekolah" => "PKBM CEMERLANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "38",
                "npsn" => "P2963718",
                "nama sekolah" => "PKBM GELORA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "39",
                "npsn" => "P2963736",
                "nama sekolah" => "PKBM CIPTA KARYA MANDIRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "40",
                "npsn" => "P2963738",
                "nama sekolah" => "PKBM CAHAYA ILMU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "41",
                "npsn" => "P2963739",
                "nama sekolah" => "PKBM SINDORO SUMBING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "42",
                "npsn" => "P2964265",
                "nama sekolah" => "PKBM YASMINA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "43",
                "npsn" => "P2964267",
                "nama sekolah" => "PKBM PROSPEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "44",
                "npsn" => "P2964287",
                "nama sekolah" => "PKBM ULUL ALBAB",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "45",
                "npsn" => "P2964428",
                "nama sekolah" => "PKBM SATRIA NEGARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "46",
                "npsn" => "P2964616",
                "nama sekolah" => "PKBM BINA ILMU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "47",
                "npsn" => "P2964617",
                "nama sekolah" => "PKBM TUNAS MANDIRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "48",
                "npsn" => "P2964642",
                "nama sekolah" => "PKBM AL HUDA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "49",
                "npsn" => "P9948196",
                "nama sekolah" => "SKB KABUPATEN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_03",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "50",
                "npsn" => "P9948574",
                "nama sekolah" => "PKBM BERGEMA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "51",
                "npsn" => "P9956855",
                "nama sekolah" => "PKBM PELITA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "52",
                "npsn" => "P9959834",
                "nama sekolah" => "PKBM Perintis",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "53",
                "npsn" => "P9998374",
                "nama sekolah" => "PKBM AN NIDZHOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "54",
                "npsn" => "20306577",
                "nama sekolah" => "SD NEGERI 3 KWADUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "55",
                "npsn" => "20306578",
                "nama sekolah" => "SD NEGERI 3 KERTEK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "56",
                "npsn" => "20306579",
                "nama sekolah" => "SD NEGERI 3 KEPIL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "57",
                "npsn" => "20306580",
                "nama sekolah" => "SD NEGERI 3 KEMIRIOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "58",
                "npsn" => "20306581",
                "nama sekolah" => "SD NEGERI 3 KEMBARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "59",
                "npsn" => "20306582",
                "nama sekolah" => "SD NEGERI 3 KARANGREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "60",
                "npsn" => "20306583",
                "nama sekolah" => "SD NEGERI 3 KALIWULUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "61",
                "npsn" => "20306584",
                "nama sekolah" => "SD NEGERI 3 KALIKARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "62",
                "npsn" => "20306585",
                "nama sekolah" => "SD NEGERI 3 KALIKAJAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "63",
                "npsn" => "20306586",
                "nama sekolah" => "SD NEGERI 3 KALIGOWONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "64",
                "npsn" => "20306587",
                "nama sekolah" => "SD NEGERI 3 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "65",
                "npsn" => "20306587",
                "nama sekolah" => "SD NEGERI 3 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "66",
                "npsn" => "20306589",
                "nama sekolah" => "SD NEGERI 3 ROPOH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "67",
                "npsn" => "20306591",
                "nama sekolah" => "SD NEGERI 2 PERBOTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "68",
                "npsn" => "20306592",
                "nama sekolah" => "SD NEGERI 2 PECEKELAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "69",
                "npsn" => "20306593",
                "nama sekolah" => "SD NEGERI 3 NGALIAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "70",
                "npsn" => "20306594",
                "nama sekolah" => "SD NEGERI 2 MADURETNO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "71",
                "npsn" => "20306595",
                "nama sekolah" => "SD NEGERI 3 LUMAJANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "72",
                "npsn" => "20306596",
                "nama sekolah" => "SD NEGERI 3 LEKSONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "73",
                "npsn" => "20306598",
                "nama sekolah" => "SD NEGERI 3 SAPURAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "74",
                "npsn" => "20306599",
                "nama sekolah" => "SD NEGERI 3 KALIBAWANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "75",
                "npsn" => "20306600",
                "nama sekolah" => "SD NEGERI 3 BATURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "76",
                "npsn" => "20306601",
                "nama sekolah" => "SD NEGERI 3 BANYUMUDAL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "77",
                "npsn" => "20306604",
                "nama sekolah" => "SD NEGERI 2 WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "78",
                "npsn" => "20306605",
                "nama sekolah" => "SD NEGERI 2 WONOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "79",
                "npsn" => "20306606",
                "nama sekolah" => "SD NEGERI 2 WONOROTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "80",
                "npsn" => "20306607",
                "nama sekolah" => "SD NEGERI 2 WONOKROMO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "81",
                "npsn" => "20306608",
                "nama sekolah" => "SD NEGERI 2 WONOKAMPIR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "82",
                "npsn" => "20306609",
                "nama sekolah" => "SD NEGERI 3 BESUKI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "83",
                "npsn" => "20306610",
                "nama sekolah" => "SD NEGERI 3 BINANGUN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "84",
                "npsn" => "20306611",
                "nama sekolah" => "SD NEGERI 3 JONGGOLSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "85",
                "npsn" => "20306612",
                "nama sekolah" => "SD NEGERI 3 JARAKSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "86",
                "npsn" => "20306613",
                "nama sekolah" => "SD NEGERI 3 JANGKRIKAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "87",
                "npsn" => "20306614",
                "nama sekolah" => "SD NEGERI 3 GUMELAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "88",
                "npsn" => "20306615",
                "nama sekolah" => "SD NEGERI 3 GONDOWULAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "89",
                "npsn" => "20306616",
                "nama sekolah" => "SD NEGERI 3 GARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "90",
                "npsn" => "20306618",
                "nama sekolah" => "SD NEGERI 3 DEMPEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "91",
                "npsn" => "20306619",
                "nama sekolah" => "SD NEGERI 3 BUTUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "92",
                "npsn" => "20306620",
                "nama sekolah" => "SD NEGERI 2 WINONGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "93",
                "npsn" => "20306621",
                "nama sekolah" => "SD NEGERI 2 SAWANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "94",
                "npsn" => "20306622",
                "nama sekolah" => "SD NEGERI CANDIREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "95",
                "npsn" => "20306623",
                "nama sekolah" => "SD NEGERI 8 WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "96",
                "npsn" => "20306627",
                "nama sekolah" => "SD NEGERI 5 WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "97",
                "npsn" => "20306630",
                "nama sekolah" => "SD NEGERI 5 BUTUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "98",
                "npsn" => "20306633",
                "nama sekolah" => "SD NEGERI ANDONGSILI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "99",
                "npsn" => "20306634",
                "nama sekolah" => "SD NEGERI CANDI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "100",
                "npsn" => "20306635",
                "nama sekolah" => "SD NEGERI CAMPURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "101",
                "npsn" => "20306636",
                "nama sekolah" => "SD NEGERI BURAT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "102",
                "npsn" => "20306637",
                "nama sekolah" => "SD NEGERI BUMIRESO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "103",
                "npsn" => "20306638",
                "nama sekolah" => "SD NEGERI BLEDERAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "104",
                "npsn" => "20306639",
                "nama sekolah" => "SD NEGERI BENER",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "105",
                "npsn" => "20306641",
                "nama sekolah" => "SD NEGERI BANJAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "106",
                "npsn" => "20306642",
                "nama sekolah" => "SD NEGERI BALEKAMBANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "107",
                "npsn" => "20306644",
                "nama sekolah" => "SD NEGERI 4 SAPURAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "108",
                "npsn" => "20306645",
                "nama sekolah" => "SD NEGERI 3 TRIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "109",
                "npsn" => "20306646",
                "nama sekolah" => "SD NEGERI 3 TLOGO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "110",
                "npsn" => "20306647",
                "nama sekolah" => "SD NEGERI 3 TIRIP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "111",
                "npsn" => "20306648",
                "nama sekolah" => "SD NEGERI 3 TEMPUREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "112",
                "npsn" => "20306649",
                "nama sekolah" => "SD NEGERI 3 TANJUNGANOM KECAMATAN KEPIL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "113",
                "npsn" => "20306650",
                "nama sekolah" => "SD NEGERI 2 TANJUNGANOM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "114",
                "npsn" => "20306651",
                "nama sekolah" => "SD NEGERI 3 SUKOHARJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "115",
                "npsn" => "20306653",
                "nama sekolah" => "SD NEGERI 2 SIGEDANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "116",
                "npsn" => "20306654",
                "nama sekolah" => "SD NEGERI 3 WADASLINTANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "117",
                "npsn" => "20306655",
                "nama sekolah" => "SD NEGERI 3 WONOKAMPIR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "118",
                "npsn" => "20306656",
                "nama sekolah" => "SD NEGERI 4 NGALIAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "119",
                "npsn" => "20306657",
                "nama sekolah" => "SD NEGERI 4 KWADUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "120",
                "npsn" => "20306658",
                "nama sekolah" => "SD NEGERI 4 KALIKARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "121",
                "npsn" => "20306659",
                "nama sekolah" => "SD NEGERI 4 JARAKSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "122",
                "npsn" => "20306670",
                "nama sekolah" => "SD NEGERI 4 GADINGREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "123",
                "npsn" => "20306671",
                "nama sekolah" => "SD NEGERI 4 BUTUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "124",
                "npsn" => "20306672",
                "nama sekolah" => "SD NEGERI 4 BINANGUN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "125",
                "npsn" => "20306674",
                "nama sekolah" => "SD NEGERI 3 WONOROTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "126",
                "npsn" => "20306676",
                "nama sekolah" => "SD NEGERI 2 WATUMALANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "127",
                "npsn" => "20306677",
                "nama sekolah" => "SD NEGERI 2 RECO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "128",
                "npsn" => "20306680",
                "nama sekolah" => "SD NEGERI 2 PARIKESIT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "129",
                "npsn" => "20306682",
                "nama sekolah" => "SD NEGERI 2 PAGEREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "130",
                "npsn" => "20306684",
                "nama sekolah" => "SD NEGERI 2 NGALIAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "131",
                "npsn" => "20306686",
                "nama sekolah" => "SD NEGERI 2 NGADIKUSUMAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "132",
                "npsn" => "20306687",
                "nama sekolah" => "SD NEGERI 2 NGADIKERSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "133",
                "npsn" => "20306689",
                "nama sekolah" => "SD NEGERI 2 PENGARENGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "134",
                "npsn" => "20306690",
                "nama sekolah" => "SD NEGERI 2 PUCUNGKEREP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "135",
                "npsn" => "20306692",
                "nama sekolah" => "SD NEGERI 2 PURWOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "136",
                "npsn" => "20306693",
                "nama sekolah" => "SD NEGERI 2 PUNGANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "137",
                "npsn" => "20306694",
                "nama sekolah" => "SD NEGERI 2 PULOSAREN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "138",
                "npsn" => "20306695",
                "nama sekolah" => "SD NEGERI 2 PUCUNGWETAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "139",
                "npsn" => "20306696",
                "nama sekolah" => "SD NEGERI 2 PLUNJARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "140",
                "npsn" => "20306697",
                "nama sekolah" => "SD NEGERI 2 PESODONGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "141",
                "npsn" => "20306699",
                "nama sekolah" => "SD NEGERI 2 MUDAL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "142",
                "npsn" => "20306700",
                "nama sekolah" => "SD NEGERI 2 MOJOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "143",
                "npsn" => "20306702",
                "nama sekolah" => "SD NEGERI 2 LANCAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "144",
                "npsn" => "20306703",
                "nama sekolah" => "SD NEGERI 2 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "145",
                "npsn" => "20306703",
                "nama sekolah" => "SD NEGERI 2 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "146",
                "npsn" => "20306705",
                "nama sekolah" => "SD NEGERI 2 KWADUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "147",
                "npsn" => "20306706",
                "nama sekolah" => "SD NEGERI 2 KUMEJING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "148",
                "npsn" => "20306707",
                "nama sekolah" => "SD NEGERI 2 KRINJING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "149",
                "npsn" => "20306708",
                "nama sekolah" => "SD NEGERI 2 KRASAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "150",
                "npsn" => "20306708",
                "nama sekolah" => "SD NEGERI 2 KRASAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "151",
                "npsn" => "20306710",
                "nama sekolah" => "SD NEGERI 2 LENGKONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "152",
                "npsn" => "20306711",
                "nama sekolah" => "SD NEGERI 2 LIMBANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "153",
                "npsn" => "20306712",
                "nama sekolah" => "SD NEGERI 2 MLIPAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "154",
                "npsn" => "20306713",
                "nama sekolah" => "SD NEGERI 2 MLANDI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "155",
                "npsn" => "20306716",
                "nama sekolah" => "SD NEGERI 2 MARON",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "156",
                "npsn" => "20306717",
                "nama sekolah" => "SD NEGERI 2 MANGUNREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "157",
                "npsn" => "20306720",
                "nama sekolah" => "SD NEGERI 2 LUMAJANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "158",
                "npsn" => "20306722",
                "nama sekolah" => "SD NEGERI 2 REJOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "159",
                "npsn" => "20306723",
                "nama sekolah" => "SD NEGERI 2 WARANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "160",
                "npsn" => "20306724",
                "nama sekolah" => "SD NEGERI 2 TEGESWETAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "161",
                "npsn" => "20306725",
                "nama sekolah" => "SD NEGERI 2 TEGALOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "162",
                "npsn" => "20306726",
                "nama sekolah" => "SD NEGERI 2 TEGALGOT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "163",
                "npsn" => "20306650",
                "nama sekolah" => "SD NEGERI 2 TANJUNGANOM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "164",
                "npsn" => "20306729",
                "nama sekolah" => "SD NEGERI 2 TAMBI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "165",
                "npsn" => "20306730",
                "nama sekolah" => "SD NEGERI 2 SUROYUDAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "166",
                "npsn" => "20306731",
                "nama sekolah" => "SD NEGERI 2 SURENGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "167",
                "npsn" => "20306732",
                "nama sekolah" => "SD NEGERI 2 SUMBEREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "168",
                "npsn" => "20306733",
                "nama sekolah" => "SD NEGERI 2 TEMPURANDUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "169",
                "npsn" => "20306734",
                "nama sekolah" => "SD NEGERI 2 TEMPUREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "170",
                "npsn" => "20306735",
                "nama sekolah" => "SD NEGERI 2 WADASLINTANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "171",
                "npsn" => "20306737",
                "nama sekolah" => "SD NEGERI 2 TRIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "172",
                "npsn" => "20306738",
                "nama sekolah" => "SD NEGERI 2 TRACAP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "173",
                "npsn" => "20306740",
                "nama sekolah" => "SD NEGERI 2 TLOGO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "174",
                "npsn" => "20306741",
                "nama sekolah" => "SD NEGERI 2 TIRIP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "175",
                "npsn" => "20306743",
                "nama sekolah" => "SD NEGERI 2 TEMPURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "176",
                "npsn" => "20306746",
                "nama sekolah" => "SD NEGERI 2 SENDANGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "177",
                "npsn" => "20306749",
                "nama sekolah" => "SD NEGERI 2 SEDAYU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "178",
                "npsn" => "20306753",
                "nama sekolah" => "SD NEGERI 2 ROJOIMO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "179",
                "npsn" => "20306754",
                "nama sekolah" => "SD NEGERI 2 ROGOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "180",
                "npsn" => "20306755",
                "nama sekolah" => "SD NEGERI 2 SERANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "181",
                "npsn" => "20306757",
                "nama sekolah" => "SD NEGERI 2 SUKOHARJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "182",
                "npsn" => "20306759",
                "nama sekolah" => "SD NEGERI 2 SOMOGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "183",
                "npsn" => "20306760",
                "nama sekolah" => "SD NEGERI 2 SOJOKERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "184",
                "npsn" => "20306761",
                "nama sekolah" => "SD NEGERI 2 SLUKATAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "185",
                "npsn" => "20306762",
                "nama sekolah" => "SD NEGERI SIWURAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "186",
                "npsn" => "20306763",
                "nama sekolah" => "SD NEGERI 2 SINDUPATEN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "187",
                "npsn" => "20306764",
                "nama sekolah" => "SD NEGERI 2 SIMBANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "188",
                "npsn" => "20306765",
                "nama sekolah" => "SD NEGERI 2 SIKUNANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "189",
                "npsn" => "20306766",
                "nama sekolah" => "SD NEGERI 2 RIMPAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "190",
                "npsn" => "20306868",
                "nama sekolah" => "SD NEGERI PAKUNCEN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "191",
                "npsn" => "20306869",
                "nama sekolah" => "SD NEGERI LARANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "192",
                "npsn" => "20306870",
                "nama sekolah" => "SD NEGERI KURIPAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "193",
                "npsn" => "20306871",
                "nama sekolah" => "SD NEGERI KUPANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "194",
                "npsn" => "20306872",
                "nama sekolah" => "SD KRISTEN BENDUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "195",
                "npsn" => "20306873",
                "nama sekolah" => "SD NEGERI KREO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "196",
                "npsn" => "20306874",
                "nama sekolah" => "SD NEGERI KESENENG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "197",
                "npsn" => "20306875",
                "nama sekolah" => "SD NEGERI KEJAJAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "198",
                "npsn" => "20306876",
                "nama sekolah" => "SD NEGERI KECIS",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "199",
                "npsn" => "20306877",
                "nama sekolah" => "SD NEGERI KEBRENGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "200",
                "npsn" => "20306878",
                "nama sekolah" => "SD NEGERI LARANGAN KULON",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "201",
                "npsn" => "20306879",
                "nama sekolah" => "SD NEGERI LEBAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "202",
                "npsn" => "20306880",
                "nama sekolah" => "SD NEGERI PAGERKUKUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "203",
                "npsn" => "20306881",
                "nama sekolah" => "SD NEGERI NGASINAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "204",
                "npsn" => "20306882",
                "nama sekolah" => "SD NEGERI NGADISALAM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "205",
                "npsn" => "20306883",
                "nama sekolah" => "SD NEGERI NGADIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "206",
                "npsn" => "20306884",
                "nama sekolah" => "SD NEGERI MUNGKUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "207",
                "npsn" => "20306885",
                "nama sekolah" => "SD NEGERI MERGOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "208",
                "npsn" => "20306886",
                "nama sekolah" => "SD NEGERI MENJER",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "209",
                "npsn" => "20306887",
                "nama sekolah" => "SD NEGERI MARONGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "210",
                "npsn" => "20306889",
                "nama sekolah" => "SD NEGERI LIPURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "211",
                "npsn" => "20306891",
                "nama sekolah" => "SD NEGERI KARANGANYAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "212",
                "npsn" => "20306892",
                "nama sekolah" => "SD NEGERI KAPULOGO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "213",
                "npsn" => "20306893",
                "nama sekolah" => "SD NEGERI GUNUNG TUGEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "214",
                "npsn" => "20306894",
                "nama sekolah" => "SD NEGERI GUNUNG TAWANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "215",
                "npsn" => "20306895",
                "nama sekolah" => "SD NEGERI GUNTURMADU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "216",
                "npsn" => "20306896",
                "nama sekolah" => "SD NEGERI GUMIWANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "217",
                "npsn" => "20306897",
                "nama sekolah" => "SD NEGERI GAMBARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "218",
                "npsn" => "20306898",
                "nama sekolah" => "SD NEGERI DURENSAWIT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "219",
                "npsn" => "20306899",
                "nama sekolah" => "SD NEGERI DIENG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "220",
                "npsn" => "20306900",
                "nama sekolah" => "SD NEGERI DERONGISOR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "221",
                "npsn" => "20306901",
                "nama sekolah" => "SD NEGERI DAMARKASIYAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "222",
                "npsn" => "20306902",
                "nama sekolah" => "SD NEGERI IGIRMRANAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "223",
                "npsn" => "20306903",
                "nama sekolah" => "SD ISLAM MIFTAHUL HUDA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "224",
                "npsn" => "20306904",
                "nama sekolah" => "SD NEGERI KALIPURU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "225",
                "npsn" => "20306905",
                "nama sekolah" => "SD NEGERI KALIANGET",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "226",
                "npsn" => "20306906",
                "nama sekolah" => "SD NEGERI KALIALANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "227",
                "npsn" => "20306907",
                "nama sekolah" => "SD NEGERI KAJEKSAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "228",
                "npsn" => "20306908",
                "nama sekolah" => "SD NEGERI KADIPATEN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "229",
                "npsn" => "20306909",
                "nama sekolah" => "SD NEGERI JOLONTORO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "230",
                "npsn" => "20306910",
                "nama sekolah" => "SD NEGERI JOJOGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "231",
                "npsn" => "20306911",
                "nama sekolah" => "SD NEGERI JOGOYITNAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "232",
                "npsn" => "20306912",
                "nama sekolah" => "SD NEGERI JEBENG PLAMPITAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "233",
                "npsn" => "20306913",
                "nama sekolah" => "SD NEGERI CLEDOK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "234",
                "npsn" => "20306914",
                "nama sekolah" => "SD NEGERI PANCURWENING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "235",
                "npsn" => "20306916",
                "nama sekolah" => "SD NEGERI TLOGODALEM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "236",
                "npsn" => "20306917",
                "nama sekolah" => "SD NEGERI TLOGO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "237",
                "npsn" => "20306918",
                "nama sekolah" => "SD NEGERI 1 TEMPUREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "238",
                "npsn" => "20306919",
                "nama sekolah" => "SD NEGERI TEGALSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "239",
                "npsn" => "20306920",
                "nama sekolah" => "SD NEGERI TAWANGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "240",
                "npsn" => "20306921",
                "nama sekolah" => "SD NEGERI TALUNOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "241",
                "npsn" => "20306922",
                "nama sekolah" => "SD NEGERI SUROJOYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "242",
                "npsn" => "20306924",
                "nama sekolah" => "SD NEGERI SUMBERWULAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "243",
                "npsn" => "20306925",
                "nama sekolah" => "SD NEGERI TLOGOMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "244",
                "npsn" => "20306926",
                "nama sekolah" => "SD NEGERI WILAYU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "245",
                "npsn" => "20306930",
                "nama sekolah" => "SD NEGERI WULUNGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "246",
                "npsn" => "20306931",
                "nama sekolah" => "SD NEGERI WRINGINANOM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "247",
                "npsn" => "20306932",
                "nama sekolah" => "SD NEGERI WONOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "248",
                "npsn" => "20306933",
                "nama sekolah" => "SD NEGERI WONOREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "249",
                "npsn" => "20306934",
                "nama sekolah" => "SD NEGERI WONOLELO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "250",
                "npsn" => "20306935",
                "nama sekolah" => "SD NEGERI WONOKERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "251",
                "npsn" => "20306936",
                "nama sekolah" => "SD NEGERI SUKOREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "252",
                "npsn" => "20306937",
                "nama sekolah" => "SD NEGERI SOJOPURO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "253",
                "npsn" => "20306938",
                "nama sekolah" => "SD NEGERI REJOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "254",
                "npsn" => "20306939",
                "nama sekolah" => "SD NEGERI RANDUSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "255",
                "npsn" => "20306940",
                "nama sekolah" => "SD NEGERI PURWOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "256",
                "npsn" => "20306941",
                "nama sekolah" => "SD NEGERI PURBOSONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "257",
                "npsn" => "20306942",
                "nama sekolah" => "SD NEGERI PULUS",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "258",
                "npsn" => "20306943",
                "nama sekolah" => "SD NEGERI 1 PUCUNGKEREP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "259",
                "npsn" => "20306944",
                "nama sekolah" => "SD NEGERI PLODONGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "260",
                "npsn" => "20306945",
                "nama sekolah" => "SD NEGERI PLOBANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "261",
                "npsn" => "20306946",
                "nama sekolah" => "SD NEGERI 1 PENGARENGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "262",
                "npsn" => "20306948",
                "nama sekolah" => "SD NEGERI SARIYOSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "263",
                "npsn" => "20306949",
                "nama sekolah" => "SD NEGERI SITIHARJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "264",
                "npsn" => "20306950",
                "nama sekolah" => "SD NEGERI SINDUAGUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "265",
                "npsn" => "20306951",
                "nama sekolah" => "SD NEGERI SIMBAREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "266",
                "npsn" => "20306952",
                "nama sekolah" => "SD NEGERI SIDOREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "267",
                "npsn" => "20306953",
                "nama sekolah" => "SD NEGERI SEMPOL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "268",
                "npsn" => "20306954",
                "nama sekolah" => "SD NEGERI SEMBUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "269",
                "npsn" => "20306955",
                "nama sekolah" => "SD NEGERI SEMAYU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "270",
                "npsn" => "20306956",
                "nama sekolah" => "SD NEGERI SELOMANIK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "271",
                "npsn" => "20306958",
                "nama sekolah" => "SD NEGERI PATAK BANTENG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "272",
                "npsn" => "20306959",
                "nama sekolah" => "SD NEGERI 1 BESUKI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "273",
                "npsn" => "20306960",
                "nama sekolah" => "SD KRISTEN 03",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "274",
                "npsn" => "20306962",
                "nama sekolah" => "SD ISLAM AL FATAH UTAMA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "275",
                "npsn" => "20306969",
                "nama sekolah" => "SD MAARIF TIENG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "276",
                "npsn" => "20306970",
                "nama sekolah" => "SD MUHAMMADIYAH TIENG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "277",
                "npsn" => "20306971",
                "nama sekolah" => "SD NEGERI 1 BESANI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "278",
                "npsn" => "20306972",
                "nama sekolah" => "SD NEGERI 1 BERAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "279",
                "npsn" => "20306973",
                "nama sekolah" => "SD NEGERI 1 BEJIARUM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "280",
                "npsn" => "20306974",
                "nama sekolah" => "SD NEGERI 1 BATURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "281",
                "npsn" => "20306975",
                "nama sekolah" => "SD NEGERI 1 BANYUMUDAL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "282",
                "npsn" => "20306976",
                "nama sekolah" => "SD NEGERI 1 BANYUKEMBAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "283",
                "npsn" => "20306977",
                "nama sekolah" => "SD NEGERI 1 ADIWARNO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "284",
                "npsn" => "20306978",
                "nama sekolah" => "SD TAKHASUS AL QURAN WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "285",
                "npsn" => "20306979",
                "nama sekolah" => "SD PIUS WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "286",
                "npsn" => "20307005",
                "nama sekolah" => "SD NEGERI 1 BOGORAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "287",
                "npsn" => "20307006",
                "nama sekolah" => "SD NEGERI 1 KALIKUNING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "288",
                "npsn" => "20307007",
                "nama sekolah" => "SD NEGERI 1 KAGUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "289",
                "npsn" => "20307008",
                "nama sekolah" => "SD NEGERI 1 JONGGOLSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "290",
                "npsn" => "20307009",
                "nama sekolah" => "SD NEGERI 1 JLAMPRANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "291",
                "npsn" => "20307009",
                "nama sekolah" => "SD NEGERI 1 JLAMPRANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "292",
                "npsn" => "20307011",
                "nama sekolah" => "SD NEGERI 1 JENGKOL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "293",
                "npsn" => "20307013",
                "nama sekolah" => "SD NEGERI 1 JARAKSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "294",
                "npsn" => "20307014",
                "nama sekolah" => "SD NEGERI 1 JANGKRIKAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "295",
                "npsn" => "20307015",
                "nama sekolah" => "SD NEGERI 1 GUMELAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "296",
                "npsn" => "20307016",
                "nama sekolah" => "SD NEGERI 1 GUMAWANG KIDUL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "297",
                "npsn" => "20306870",
                "nama sekolah" => "SD NEGERI KURIPAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "298",
                "npsn" => "20307018",
                "nama sekolah" => "SD NEGERI 1 KALIBAWANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "299",
                "npsn" => "20307019",
                "nama sekolah" => "SD NEGERI 1 KALIKARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "300",
                "npsn" => "20307020",
                "nama sekolah" => "SD NEGERI 1 KALIKAJAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "301",
                "npsn" => "20307021",
                "nama sekolah" => "SD NEGERI 1 KALIGUWO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "302",
                "npsn" => "20307022",
                "nama sekolah" => "SD NEGERI 1 KALIGOWONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "303",
                "npsn" => "20307023",
                "nama sekolah" => "SD NEGERI 1 KALIERANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "304",
                "npsn" => "20307024",
                "nama sekolah" => "SD NEGERI 1 KALIDESEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "305",
                "npsn" => "20307025",
                "nama sekolah" => "SD NEGERI 1 KALIDADAP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "306",
                "npsn" => "20307026",
                "nama sekolah" => "SD NEGERI 1 KALIBENING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "307",
                "npsn" => "20307027",
                "nama sekolah" => "SD NEGERI 1 KALIBEBER",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "308",
                "npsn" => "20307029",
                "nama sekolah" => "SD NEGERI 1 GONDOWULAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "309",
                "npsn" => "20307030",
                "nama sekolah" => "SD NEGERI CANDIYASAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "310",
                "npsn" => "20307031",
                "nama sekolah" => "SD NEGERI 1 CANDIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "311",
                "npsn" => "20307032",
                "nama sekolah" => "SD NEGERI 1 BUTUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "312",
                "npsn" => "20307033",
                "nama sekolah" => "SD NEGERI 1 BUNTU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "313",
                "npsn" => "20307034",
                "nama sekolah" => "SD NEGERI 1 BUMITIRTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "314",
                "npsn" => "20307035",
                "nama sekolah" => "SD NEGERI BUMIROSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "315",
                "npsn" => "20307036",
                "nama sekolah" => "SD NEGERI 1 BUMIREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "316",
                "npsn" => "20307037",
                "nama sekolah" => "SD NEGERI 1 BOWONGSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "317",
                "npsn" => "20307038",
                "nama sekolah" => "SD NEGERI 1 BOMERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "318",
                "npsn" => "20307039",
                "nama sekolah" => "SD NEGERI 1 DEMPEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "319",
                "npsn" => "20307040",
                "nama sekolah" => "SD NEGERI 1 DEPOK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "320",
                "npsn" => "20307041",
                "nama sekolah" => "SD NEGERI 1 GONDANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "321",
                "npsn" => "20307042",
                "nama sekolah" => "SD NEGERI 1 GLAGAH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "322",
                "npsn" => "20307043",
                "nama sekolah" => "SD NEGERI 1 GEMBLENGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "323",
                "npsn" => "20307044",
                "nama sekolah" => "SD NEGERI 1 GARUNGLOR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "324",
                "npsn" => "20307045",
                "nama sekolah" => "SD NEGERI 1 GARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "325",
                "npsn" => "20307046",
                "nama sekolah" => "SD NEGERI 1 GADINGREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "326",
                "npsn" => "20307047",
                "nama sekolah" => "SD NEGERI 1 GADINGSUKUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "327",
                "npsn" => "20307048",
                "nama sekolah" => "SD NEGERI 1 EROREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "328",
                "npsn" => "20307049",
                "nama sekolah" => "SD NEGERI 1 DERODUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "329",
                "npsn" => "20307050",
                "nama sekolah" => "SD NEGERI 1 BOJASARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "330",
                "npsn" => "20307144",
                "nama sekolah" => "SD NEGERI 2 BESANI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "331",
                "npsn" => "20307145",
                "nama sekolah" => "SD NEGERI 2 BERAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "332",
                "npsn" => "20307146",
                "nama sekolah" => "SD NEGERI 2 BEJIARUM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "333",
                "npsn" => "20307147",
                "nama sekolah" => "SD NEGERI 2 BATURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "334",
                "npsn" => "20307148",
                "nama sekolah" => "SD NEGERI 2 BANYUMUDAL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "335",
                "npsn" => "20307149",
                "nama sekolah" => "SD NEGERI 2 BANYUKEMBAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "336",
                "npsn" => "20307151",
                "nama sekolah" => "SD NEGERI 1 KERTEK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "337",
                "npsn" => "20307152",
                "nama sekolah" => "SD NEGERI 10 WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "338",
                "npsn" => "20307153",
                "nama sekolah" => "SD NEGERI 2 BESUKI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "339",
                "npsn" => "20307154",
                "nama sekolah" => "SD NEGERI 2 BOJASARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "340",
                "npsn" => "20307155",
                "nama sekolah" => "SD NEGERI 2 CANDIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "341",
                "npsn" => "20307156",
                "nama sekolah" => "SD NEGERI 2 BUTUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "342",
                "npsn" => "20307157",
                "nama sekolah" => "SD NEGERI 2 BUNTU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "343",
                "npsn" => "20307159",
                "nama sekolah" => "SD NEGERI 2 BUMIREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "344",
                "npsn" => "20307160",
                "nama sekolah" => "SD NEGERI 2 BOWONGSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "345",
                "npsn" => "20307161",
                "nama sekolah" => "SD NEGERI 2 BOMERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "346",
                "npsn" => "20307162",
                "nama sekolah" => "SD NEGERI 2 BOGORAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "347",
                "npsn" => "20307163",
                "nama sekolah" => "SD NEGERI 2 BINANGUN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "348",
                "npsn" => "20307164",
                "nama sekolah" => "SD NEGERI 1 WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "349",
                "npsn" => "20307165",
                "nama sekolah" => "SD NEGERI 1 WONOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "350",
                "npsn" => "20307166",
                "nama sekolah" => "SD NEGERI 1 TLOGO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "351",
                "npsn" => "20307167",
                "nama sekolah" => "SD NEGERI 1 TIRIP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "352",
                "npsn" => "20307168",
                "nama sekolah" => "SD NEGERI TIMBANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "353",
                "npsn" => "20307169",
                "nama sekolah" => "SD NEGERI 1 TEMPURSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "354",
                "npsn" => "20307170",
                "nama sekolah" => "SD NEGERI 1 TEMPURANDUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "355",
                "npsn" => "20307171",
                "nama sekolah" => "SD NEGERI 1 TEGESWETAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "356",
                "npsn" => "20307172",
                "nama sekolah" => "SD NEGERI 1 TEGALOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "357",
                "npsn" => "20307173",
                "nama sekolah" => "SD NEGERI 1 TEGALGOT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "358",
                "npsn" => "20307174",
                "nama sekolah" => "SD NEGERI 1 TANJUNGANOM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "359",
                "npsn" => "20307175",
                "nama sekolah" => "SD NEGERI 1 TLOGOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "360",
                "npsn" => "20307176",
                "nama sekolah" => "SD NEGERI 1 TRACAP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "361",
                "npsn" => "20307177",
                "nama sekolah" => "SD NEGERI 1 WONOROTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "362",
                "npsn" => "20307178",
                "nama sekolah" => "SD NEGERI 1 WONOKROMO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "363",
                "npsn" => "20307179",
                "nama sekolah" => "SD NEGERI 1 WONOKAMPIR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "364",
                "npsn" => "20307180",
                "nama sekolah" => "SD NEGERI 1 WINONGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "365",
                "npsn" => "20307181",
                "nama sekolah" => "SD NEGERI 1 WATUMALANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "366",
                "npsn" => "20307182",
                "nama sekolah" => "SD NEGERI 1 WARANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "367",
                "npsn" => "20307183",
                "nama sekolah" => "SD NEGERI 1 WADASLINTANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "368",
                "npsn" => "20307184",
                "nama sekolah" => "SD NEGERI TUMENGGUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "369",
                "npsn" => "20307185",
                "nama sekolah" => "SD NEGERI 1 TRIMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "370",
                "npsn" => "20307174",
                "nama sekolah" => "SD NEGERI 1 TANJUNGANOM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "371",
                "npsn" => "20307187",
                "nama sekolah" => "SD NEGERI 2 DEMPEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "372",
                "npsn" => "20307188",
                "nama sekolah" => "SD NEGERI 2 KEPIL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "373",
                "npsn" => "20307189",
                "nama sekolah" => "SD NEGERI 2 KALIWIRO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "374",
                "npsn" => "20307190",
                "nama sekolah" => "SD NEGERI KALIPUTIH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "375",
                "npsn" => "20307191",
                "nama sekolah" => "SD NEGERI 2 KALIMENDONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "376",
                "npsn" => "20307192",
                "nama sekolah" => "SD NEGERI 2 KALIKARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "377",
                "npsn" => "20307195",
                "nama sekolah" => "SD NEGERI 2 KALIGOWONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "378",
                "npsn" => "20307196",
                "nama sekolah" => "SD NEGERI 2 KALIERANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "379",
                "npsn" => "20307197",
                "nama sekolah" => "SD NEGERI 2 KALIDESEL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "380",
                "npsn" => "20307198",
                "nama sekolah" => "SD NEGERI 2 KALIWULUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "381",
                "npsn" => "20307199",
                "nama sekolah" => "SD NEGERI 2 KAPENCAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "382",
                "npsn" => "20307200",
                "nama sekolah" => "SD NEGERI 2 KEMIRIOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "383",
                "npsn" => "20307201",
                "nama sekolah" => "SD NEGERI 2 KEMBARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "384",
                "npsn" => "20307202",
                "nama sekolah" => "SD NEGERI 2 KEDALON",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "385",
                "npsn" => "20307203",
                "nama sekolah" => "SD NEGERI 2 KAYUGIYANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "386",
                "npsn" => "20307204",
                "nama sekolah" => "SD NEGERI KAUMAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "387",
                "npsn" => "20307205",
                "nama sekolah" => "SD NEGERI KARANGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "388",
                "npsn" => "20307206",
                "nama sekolah" => "SD NEGERI 2 KARANGLUHUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "389",
                "npsn" => "20307207",
                "nama sekolah" => "SD NEGERI 2 KARANGDUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "390",
                "npsn" => "20307208",
                "nama sekolah" => "SD NEGERI 2 KARANGANYAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "391",
                "npsn" => "20307209",
                "nama sekolah" => "SD NEGERI 2 KALIDADAP",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "392",
                "npsn" => "20307210",
                "nama sekolah" => "SD NEGERI 2 KALIBENING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "393",
                "npsn" => "20307211",
                "nama sekolah" => "SD NEGERI 2 GLAGAH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "394",
                "npsn" => "20307212",
                "nama sekolah" => "SD NEGERI 2 GONDOWULAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "395",
                "npsn" => "20307213",
                "nama sekolah" => "SD NEGERI 2 GEMBLENGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "396",
                "npsn" => "20307214",
                "nama sekolah" => "SD NEGERI 2 GARUNGLOR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "397",
                "npsn" => "20307215",
                "nama sekolah" => "SD NEGERI 2 GARUNG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "398",
                "npsn" => "20307216",
                "nama sekolah" => "SD NEGERI 2 GADINGREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "399",
                "npsn" => "20307217",
                "nama sekolah" => "SD NEGERI 2 GADINGSUKUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "400",
                "npsn" => "20307218",
                "nama sekolah" => "SD NEGERI 2 EROREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "401",
                "npsn" => "20307219",
                "nama sekolah" => "SD NEGERI 2 DERODUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "402",
                "npsn" => "20307220",
                "nama sekolah" => "SD NEGERI 2 GUMELAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "403",
                "npsn" => "20307221",
                "nama sekolah" => "SD NEGERI 2 JANGKRIKAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "404",
                "npsn" => "20307223",
                "nama sekolah" => "SD NEGERI 2 KALIBEBER",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "405",
                "npsn" => "20307224",
                "nama sekolah" => "SD NEGERI 2 KALIBAWANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "406",
                "npsn" => "20307226",
                "nama sekolah" => "SD NEGERI 2 KAGUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "407",
                "npsn" => "20307228",
                "nama sekolah" => "SD NEGERI 2 JLAMPRANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "408",
                "npsn" => "20307228",
                "nama sekolah" => "SD NEGERI 2 JLAMPRANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "409",
                "npsn" => "20307230",
                "nama sekolah" => "SD NEGERI 2 JENGKOL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "410",
                "npsn" => "20307231",
                "nama sekolah" => "SD NEGERI 2 JARAKSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "411",
                "npsn" => "20307233",
                "nama sekolah" => "SD NEGERI 1 TAMBI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "412",
                "npsn" => "20307236",
                "nama sekolah" => "SD NEGERI 1 MANGGIS",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "413",
                "npsn" => "20307237",
                "nama sekolah" => "SD NEGERI 1 MADURETNO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "414",
                "npsn" => "20307238",
                "nama sekolah" => "SD NEGERI 1 LUMAJANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "415",
                "npsn" => "20307239",
                "nama sekolah" => "SD NEGERI 1 LIMBANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "416",
                "npsn" => "20307240",
                "nama sekolah" => "SD NEGERI 1 LENGKONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "417",
                "npsn" => "20307241",
                "nama sekolah" => "SD NEGERI 1 LEKSONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "418",
                "npsn" => "20307242",
                "nama sekolah" => "SD NEGERI 1 LANCAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "419",
                "npsn" => "20307243",
                "nama sekolah" => "SD NEGERI 1 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "420",
                "npsn" => "20307243",
                "nama sekolah" => "SD NEGERI 1 LAMUK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "421",
                "npsn" => "20307245",
                "nama sekolah" => "SD NEGERI 1 MANGUNREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "422",
                "npsn" => "20307246",
                "nama sekolah" => "SD NEGERI 1 MARON",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "423",
                "npsn" => "20307247",
                "nama sekolah" => "SD NEGERI 1 NGADIKUSUMAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "424",
                "npsn" => "20307248",
                "nama sekolah" => "SD NEGERI 1 NGADIKERSO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "425",
                "npsn" => "20307249",
                "nama sekolah" => "SD NEGERI 1 MUTISARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "426",
                "npsn" => "20307250",
                "nama sekolah" => "SD NEGERI 1 MUDAL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "427",
                "npsn" => "20307251",
                "nama sekolah" => "SD NEGERI 1 MOJOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "428",
                "npsn" => "20307252",
                "nama sekolah" => "SD NEGERI 1 MLIPAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "429",
                "npsn" => "20307253",
                "nama sekolah" => "SD NEGERI 1 MLANDI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "430",
                "npsn" => "20307254",
                "nama sekolah" => "SD NEGERI MERGOLANGU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "431",
                "npsn" => "20307255",
                "nama sekolah" => "SD NEGERI 1 MEDONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "432",
                "npsn" => "20307256",
                "nama sekolah" => "SD NEGERI 1 KWADUNGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "433",
                "npsn" => "20307259",
                "nama sekolah" => "SD NEGERI 1 KARANGREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "434",
                "npsn" => "20307260",
                "nama sekolah" => "SD NEGERI 1 KARANGLUHUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "435",
                "npsn" => "20307261",
                "nama sekolah" => "SD NEGERI 1 KARANGDUWUR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "436",
                "npsn" => "20307262",
                "nama sekolah" => "SD NEGERI 1 KARANGANYAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "437",
                "npsn" => "20307263",
                "nama sekolah" => "SD NEGERI 1 KAPENCAR",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "438",
                "npsn" => "20307264",
                "nama sekolah" => "SD NEGERI 1 KALIWULUH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "439",
                "npsn" => "20307265",
                "nama sekolah" => "SD NEGERI 1 KALIWIRO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "440",
                "npsn" => "20307268",
                "nama sekolah" => "SD NEGERI 1 KAYUGIYANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "441",
                "npsn" => "20307269",
                "nama sekolah" => "SD NEGERI 1 KRINJING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "442",
                "npsn" => "20307270",
                "nama sekolah" => "SD NEGERI 1 KRASAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "443",
                "npsn" => "20307270",
                "nama sekolah" => "SD NEGERI 1 KRASAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "444",
                "npsn" => "20307272",
                "nama sekolah" => "SD NEGERI KRAMATAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "445",
                "npsn" => "20307273",
                "nama sekolah" => "SD NEGERI 1 KEPIL",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "446",
                "npsn" => "20307274",
                "nama sekolah" => "SD NEGERI 1 KEMIRIOMBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "447",
                "npsn" => "20307275",
                "nama sekolah" => "SD NEGERI 1 KEMBARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "448",
                "npsn" => "20307276",
                "nama sekolah" => "SD NEGERI 1 KEJIWAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "449",
                "npsn" => "20307277",
                "nama sekolah" => "SD NEGERI 1 KEDALON",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "450",
                "npsn" => "20307278",
                "nama sekolah" => "SD NEGERI 1 KALIMENDONG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "451",
                "npsn" => "20307279",
                "nama sekolah" => "SD NEGERI 1 NGALIAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "452",
                "npsn" => "20307280",
                "nama sekolah" => "SD NEGERI SURENGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "453",
                "npsn" => "20307281",
                "nama sekolah" => "SD NEGERI 1 SINDUPATEN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "454",
                "npsn" => "20307282",
                "nama sekolah" => "SD NEGERI 1 SIMBANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "455",
                "npsn" => "20307283",
                "nama sekolah" => "SD NEGERI 1 SIKUNANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "456",
                "npsn" => "20307284",
                "nama sekolah" => "SD NEGERI 1 SIGEDANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "457",
                "npsn" => "20307285",
                "nama sekolah" => "SD NEGERI 1 SERANG",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "458",
                "npsn" => "20307286",
                "nama sekolah" => "SD NEGERI 1 SENDANGSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "459",
                "npsn" => "20307287",
                "nama sekolah" => "SD NEGERI SELOMERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "460",
                "npsn" => "20307288",
                "nama sekolah" => "SD NEGERI 1 SELOKROMO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "461",
                "npsn" => "20307289",
                "nama sekolah" => "SD NEGERI 1 SEDAYU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "462",
                "npsn" => "20307291",
                "nama sekolah" => "SD NEGERI 1 SLUKATAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "463",
                "npsn" => "20307292",
                "nama sekolah" => "SD NEGERI 1 SUROYUDAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "464",
                "npsn" => "20307293",
                "nama sekolah" => "SD NEGERI SUMBERSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "465",
                "npsn" => "20307294",
                "nama sekolah" => "SD NEGERI 1 SUMBEREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "466",
                "npsn" => "20307295",
                "nama sekolah" => "SD NEGERI 1 SUMBERDALEM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "467",
                "npsn" => "20307296",
                "nama sekolah" => "SD NEGERI SUKORENO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "468",
                "npsn" => "20307297",
                "nama sekolah" => "SD NEGERI 1 SUKOHARJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "469",
                "npsn" => "20307298",
                "nama sekolah" => "SD NEGERI 1 SUDUNGDEWO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "470",
                "npsn" => "20307299",
                "nama sekolah" => "SD NEGERI 1 SOMOGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "471",
                "npsn" => "20307300",
                "nama sekolah" => "SD NEGERI 1 SOJOKERTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "472",
                "npsn" => "20307301",
                "nama sekolah" => "SD NEGERI 1 SAWANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "473",
                "npsn" => "20307302",
                "nama sekolah" => "SD NEGERI 1 SAPURAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "474",
                "npsn" => "20307303",
                "nama sekolah" => "SD NEGERI 1 PLUNJARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "475",
                "npsn" => "20307304",
                "nama sekolah" => "SD NEGERI 1 PESODONGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "476",
                "npsn" => "20307305",
                "nama sekolah" => "SD NEGERI 1 PERBOTO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "477",
                "npsn" => "20307306",
                "nama sekolah" => "SD NEGERI 1 PECEKELAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "478",
                "npsn" => "20307307",
                "nama sekolah" => "SD NEGERI PASURUHAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "479",
                "npsn" => "20307308",
                "nama sekolah" => "SD NEGERI 1 PARIKESIT",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "480",
                "npsn" => "20307309",
                "nama sekolah" => "SD NEGERI PANERUSAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "481",
                "npsn" => "20307310",
                "nama sekolah" => "SD NEGERI 1 PACARMULYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "482",
                "npsn" => "20307311",
                "nama sekolah" => "SD NEGERI 1 PAGEREJO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "483",
                "npsn" => "20307312",
                "nama sekolah" => "SD NEGERI 1 PUCUNGWETAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "484",
                "npsn" => "20307313",
                "nama sekolah" => "SD NEGERI 1 PULOSAREN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "485",
                "npsn" => "20307314",
                "nama sekolah" => "SD NEGERI 1 PUNGANGAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "486",
                "npsn" => "20307315",
                "nama sekolah" => "SD NEGERI SAMBEK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "487",
                "npsn" => "20307316",
                "nama sekolah" => "SD NEGERI 1 ROPOH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "488",
                "npsn" => "20307317",
                "nama sekolah" => "SD NEGERI 1 ROJOIMO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "489",
                "npsn" => "20307318",
                "nama sekolah" => "SD NEGERI 1 ROGOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "490",
                "npsn" => "20307319",
                "nama sekolah" => "SD NEGERI 1 RIMPAK",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "491",
                "npsn" => "20307320",
                "nama sekolah" => "SD NEGERI 1 REJOSARI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "492",
                "npsn" => "20307321",
                "nama sekolah" => "SD NEGERI 1 RECO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "493",
                "npsn" => "20307322",
                "nama sekolah" => "SD NEGERI 1 PURWOJIWO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "494",
                "npsn" => "20307323",
                "nama sekolah" => "SD NEGERI 1 PURWOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "495",
                "npsn" => "20331689",
                "nama sekolah" => "SD NEGERI 2 ROPOH",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "496",
                "npsn" => "20331690",
                "nama sekolah" => "SD NEGERI 2 TLOGOJATI",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "497",
                "npsn" => "20331692",
                "nama sekolah" => "SD MUHAMMADIYAH SUDAGARAN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "498",
                "npsn" => "20331773",
                "nama sekolah" => "SD NEGERI 1 BINANGUN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "499",
                "npsn" => "20331774",
                "nama sekolah" => "SD NEGERI 1 NGADISONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "500",
                "npsn" => "20331775",
                "nama sekolah" => "SD NEGERI 1 SURENGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "501",
                "npsn" => "20331776",
                "nama sekolah" => "SD NEGERI 1 WONOSROYO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "502",
                "npsn" => "20331779",
                "nama sekolah" => "SD NEGERI GRUGU",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "503",
                "npsn" => "20331780",
                "nama sekolah" => "SD NEGERI 2 NGADISONO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "504",
                "npsn" => "20331781",
                "nama sekolah" => "SD NEGERI 2 PURWOJIWO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "505",
                "npsn" => "20331786",
                "nama sekolah" => "SD NEGERI 3 SURENGEDE",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "506",
                "npsn" => "20331788",
                "nama sekolah" => "SD AL MADINA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "507",
                "npsn" => "20331790",
                "nama sekolah" => "SD IT INSAN MULIA WONOSOBO",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "508",
                "npsn" => "20341428",
                "nama sekolah" => "SD MBF AL ADZKIYA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "509",
                "npsn" => "20353574",
                "nama sekolah" => "SD NEGERI 1 KUMEJING",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "510",
                "npsn" => "60711028",
                "nama sekolah" => "MIS MAARIF TEGALSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "511",
                "npsn" => "60711029",
                "nama sekolah" => "MIS MAARIF GESING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "512",
                "npsn" => "60711030",
                "nama sekolah" => "MIS MAARIF TOPENGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "513",
                "npsn" => "60711031",
                "nama sekolah" => "MIS MAARIF KANDANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "514",
                "npsn" => "60711032",
                "nama sekolah" => "MIS MAARIF KALIJERUK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "515",
                "npsn" => "60711033",
                "nama sekolah" => "MIS MAARIF MARON",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "516",
                "npsn" => "60711034",
                "nama sekolah" => "MIS MAARIF LARANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "517",
                "npsn" => "60711035",
                "nama sekolah" => "MIN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "518",
                "npsn" => "60711036",
                "nama sekolah" => "MIS MA`ARIF KARANGSAMBUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "519",
                "npsn" => "60711037",
                "nama sekolah" => "MIS MUH KALIALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "520",
                "npsn" => "60711038",
                "nama sekolah" => "MIS MUH 01 GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "521",
                "npsn" => "60711039",
                "nama sekolah" => "MIS MUH 02 GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "522",
                "npsn" => "60711040",
                "nama sekolah" => "MIS MUH KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "523",
                "npsn" => "60711041",
                "nama sekolah" => "MIS MA ARIF TRACAP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "524",
                "npsn" => "60711042",
                "nama sekolah" => "MIS MAARIF MEDONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "525",
                "npsn" => "60711043",
                "nama sekolah" => "MIS MUHAMMADIYAH KARANGMANGU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "526",
                "npsn" => "60711044",
                "nama sekolah" => "MIS MUH.BENDUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "527",
                "npsn" => "60711045",
                "nama sekolah" => "MIS MA ARIF BOWONGSO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "528",
                "npsn" => "60711046",
                "nama sekolah" => "MIS MA ARIF KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "529",
                "npsn" => "60711047",
                "nama sekolah" => "MIS MA ARIF CLENGKOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "530",
                "npsn" => "60711048",
                "nama sekolah" => "MIS MAARIF LEBAK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "531",
                "npsn" => "60711049",
                "nama sekolah" => "MIS MAARIF CAMPURSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "532",
                "npsn" => "60711050",
                "nama sekolah" => "MIS MAARIF TAMBI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "533",
                "npsn" => "60711051",
                "nama sekolah" => "MIS MUHAMMADIYAH KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "534",
                "npsn" => "60711052",
                "nama sekolah" => "MIS MAARIF SERANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "535",
                "npsn" => "60711053",
                "nama sekolah" => "MIS MAARIF JOJOGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "536",
                "npsn" => "60711054",
                "nama sekolah" => "MIS MAARIF PATAKBANTENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "537",
                "npsn" => "60711055",
                "nama sekolah" => "MIS MAARIF KALILEMBU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "538",
                "npsn" => "60711056",
                "nama sekolah" => "MIS MAARIF SEMBUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "539",
                "npsn" => "60711057",
                "nama sekolah" => "MIS MAARIF BENER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "540",
                "npsn" => "60711058",
                "nama sekolah" => "MIS MUH BENER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "541",
                "npsn" => "60711059",
                "nama sekolah" => "MIS ISLAMIYAH GADINGREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "542",
                "npsn" => "60711060",
                "nama sekolah" => "MIS MAARIF GADINGREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "543",
                "npsn" => "60711061",
                "nama sekolah" => "MIS MAARIF KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "544",
                "npsn" => "60711062",
                "nama sekolah" => "MIS MUHAMMADIYAH BERAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "545",
                "npsn" => "60711063",
                "nama sekolah" => "MIS MAARIF REJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "546",
                "npsn" => "60711064",
                "nama sekolah" => "MIS MAARIF NGALIYAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "547",
                "npsn" => "60711065",
                "nama sekolah" => "MIS MAARIF KARANGLUHUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "548",
                "npsn" => "60711066",
                "nama sekolah" => "MIS MAARIF SUREN GEDE",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "549",
                "npsn" => "60711067",
                "nama sekolah" => "MIS MUHAMMADIYAH TLOGODALEM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "550",
                "npsn" => "60711068",
                "nama sekolah" => "MIS MUH KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "551",
                "npsn" => "60711069",
                "nama sekolah" => "MIS MA`ARIF BUDI LUHUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "552",
                "npsn" => "60711070",
                "nama sekolah" => "MIS RIFAIYAH DALANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "553",
                "npsn" => "60711071",
                "nama sekolah" => "MIS MAARIF SOJOKERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "554",
                "npsn" => "60711072",
                "nama sekolah" => "MIS MUHAMMADIYAH LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "555",
                "npsn" => "60711073",
                "nama sekolah" => "MIS MUHAMMADIYAH BESANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "556",
                "npsn" => "60711074",
                "nama sekolah" => "MIS MAARIF LIPURSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "557",
                "npsn" => "60711075",
                "nama sekolah" => "MIS MAARIF BESANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "558",
                "npsn" => "60711076",
                "nama sekolah" => "MIS MAARIF KLESMAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "559",
                "npsn" => "60711077",
                "nama sekolah" => "MIS MAARIF SOJOPURO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "560",
                "npsn" => "60711078",
                "nama sekolah" => "MIS MAARIF MOJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "561",
                "npsn" => "60711079",
                "nama sekolah" => "MIS MANGGISAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "562",
                "npsn" => "60711080",
                "nama sekolah" => "MIS MAARIF KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "563",
                "npsn" => "60711081",
                "nama sekolah" => "MIS MUHAMADIYAH KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "564",
                "npsn" => "60711082",
                "nama sekolah" => "MIS MAARIF KEBONDALEM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "565",
                "npsn" => "60711083",
                "nama sekolah" => "MIS MAARIF WONOKROMO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "566",
                "npsn" => "60711084",
                "nama sekolah" => "MIS MAARIF KEBRENGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "567",
                "npsn" => "60711085",
                "nama sekolah" => "MIS MAARIF SLUKATAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "568",
                "npsn" => "60711086",
                "nama sekolah" => "MIS MA`ARIF TALUNOMBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "569",
                "npsn" => "60711087",
                "nama sekolah" => "MIS MA`ARIF BENDOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "570",
                "npsn" => "60711088",
                "nama sekolah" => "MIS ISLAMIYAH JOLONTORO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "571",
                "npsn" => "60711089",
                "nama sekolah" => "MIS MUHAMMADIYAH MARONGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "572",
                "npsn" => "60711090",
                "nama sekolah" => "MIS MA`ARIF NGADIKERSO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "573",
                "npsn" => "60711091",
                "nama sekolah" => "MIS GUPPI SUMBERWULAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "574",
                "npsn" => "60711092",
                "nama sekolah" => "MIS MUH. SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "575",
                "npsn" => "60711093",
                "nama sekolah" => "MIS MAARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "576",
                "npsn" => "60711094",
                "nama sekolah" => "MIS MAARIF KARANGANYAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "577",
                "npsn" => "60711095",
                "nama sekolah" => "MIS HIDAYATUSSIBYAN KUMEJING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "578",
                "npsn" => "60711096",
                "nama sekolah" => "MIS HIDAYATUSSIBYAN LANCAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "579",
                "npsn" => "60711097",
                "nama sekolah" => "MIS MAARIF KALIDADAP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "580",
                "npsn" => "60711098",
                "nama sekolah" => "MIS MAARIF AL FATAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "581",
                "npsn" => "60711099",
                "nama sekolah" => "MIS MAARIF SOMOGEDE",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "582",
                "npsn" => "60711100",
                "nama sekolah" => "MIS MAARIF TRIMULYO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "583",
                "npsn" => "60711101",
                "nama sekolah" => "MIS HIDAYATUSSIBYAN WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "584",
                "npsn" => "60711102",
                "nama sekolah" => "MIS MAARIF PUKIRAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "585",
                "npsn" => "60711103",
                "nama sekolah" => "MIS MAARIF KALIGOWONG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "586",
                "npsn" => "60711104",
                "nama sekolah" => "MIS GUPPI GUMAWANG LOR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "587",
                "npsn" => "60711105",
                "nama sekolah" => "MIS MAARIF GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "588",
                "npsn" => "60711106",
                "nama sekolah" => "MIS MAARIF KLIWONAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "589",
                "npsn" => "60711107",
                "nama sekolah" => "MIS MAARIF KEJIWAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "590",
                "npsn" => "60711108",
                "nama sekolah" => "MIS MAARIF KALIANGET",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "591",
                "npsn" => "69725747",
                "nama sekolah" => "MIS MAARIF KAPULOGO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "592",
                "npsn" => "69725748",
                "nama sekolah" => "MIS MAARIF TEGALGOT",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "593",
                "npsn" => "69725749",
                "nama sekolah" => "MIS MUHAMMADIYAH TANJUNGANOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "594",
                "npsn" => "69725750",
                "nama sekolah" => "MIS MAARIF ROPOH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "595",
                "npsn" => "69725751",
                "nama sekolah" => "MIS MAARIF TUMENGGUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "596",
                "npsn" => "69725752",
                "nama sekolah" => "MIS MAARIF TAWANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "597",
                "npsn" => "69725753",
                "nama sekolah" => "MIS MAARIF GUNUNGTAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "598",
                "npsn" => "69725754",
                "nama sekolah" => "MIS MAARIF NGADIMULYO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "599",
                "npsn" => "69725755",
                "nama sekolah" => "MIS MAARIF BULUSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "600",
                "npsn" => "69725756",
                "nama sekolah" => "MIS MUHAMMADIYAH MUNGKUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "601",
                "npsn" => "69725757",
                "nama sekolah" => "MIS MAARIF SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "602",
                "npsn" => "69725758",
                "nama sekolah" => "MIS MAARIF MERGOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "603",
                "npsn" => "69725786",
                "nama sekolah" => "MIS MAARIF KADIPATEN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "604",
                "npsn" => "69928160",
                "nama sekolah" => "MIS AL QUR`AN AL KAYYIS",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "605",
                "npsn" => "69928163",
                "nama sekolah" => "MISMA`ARIF NU SIRANGKEL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "606",
                "npsn" => "69928164",
                "nama sekolah" => "MISMK AN NUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "607",
                "npsn" => "69961892",
                "nama sekolah" => "SD NASIONAL KAKUKA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "608",
                "npsn" => "70002221",
                "nama sekolah" => "SD ABF KHALIFA",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "609",
                "npsn" => "70031663",
                "nama sekolah" => "SD TAHFIDZ SA`ADATUL ISLAM",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "610",
                "npsn" => "70032559",
                "nama sekolah" => "SD ISLAM BAITUL MUJAHIDIN",
                "jenjang" => "SD",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "611",
                "npsn" => "70033120",
                "nama sekolah" => "MI AN NAWAWI ISLAMIC BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "612",
                "npsn" => "70033492",
                "nama sekolah" => "MI MA'ARIF AL-FATTAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "613",
                "npsn" => "20306806",
                "nama sekolah" => "SMA NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "614",
                "npsn" => "20306807",
                "nama sekolah" => "SMA NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "615",
                "npsn" => "20306808",
                "nama sekolah" => "SMAN 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "616",
                "npsn" => "20306809",
                "nama sekolah" => "SMA NEGERI 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "617",
                "npsn" => "20306821",
                "nama sekolah" => "SMAN 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "618",
                "npsn" => "20306867",
                "nama sekolah" => "SMA NEGERI 1 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "619",
                "npsn" => "20306915",
                "nama sekolah" => "SMAN 1 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "620",
                "npsn" => "20331700",
                "nama sekolah" => "SMA NEGERI 1 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "621",
                "npsn" => "20331701",
                "nama sekolah" => "SMAS TAKHASSUS AS SAHRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "622",
                "npsn" => "20331702",
                "nama sekolah" => "SMAS KRISTEN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "623",
                "npsn" => "20331704",
                "nama sekolah" => "SMAS MA ARIF WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "624",
                "npsn" => "20331705",
                "nama sekolah" => "SMAS NU KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "625",
                "npsn" => "20331707",
                "nama sekolah" => "SMAS TAKHASSUS AL-QUR AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "626",
                "npsn" => "20331819",
                "nama sekolah" => "SMAS MA ARIF LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "627",
                "npsn" => "20331953",
                "nama sekolah" => "SMAS MUHAMMADIYAH WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "628",
                "npsn" => "20341094",
                "nama sekolah" => "SMAN 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "629",
                "npsn" => "20363259",
                "nama sekolah" => "MAS MUHAMMADIYAH KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "630",
                "npsn" => "20363260",
                "nama sekolah" => "MAN 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "631",
                "npsn" => "20363261",
                "nama sekolah" => "MAN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "632",
                "npsn" => "69734236",
                "nama sekolah" => "MAS TAKHASSUS ALQURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "633",
                "npsn" => "69941690",
                "nama sekolah" => "MAS SATU ATAP AL HIKAM CENDEKIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "634",
                "npsn" => "69941691",
                "nama sekolah" => "MAS AL FATAH GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "635",
                "npsn" => "69941692",
                "nama sekolah" => "MAS Matholi Ul Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "636",
                "npsn" => "69941693",
                "nama sekolah" => "MAS I ANATUL QUR AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "637",
                "npsn" => "69941694",
                "nama sekolah" => "MAS NU DARUL ISLAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "638",
                "npsn" => "69941695",
                "nama sekolah" => "MAS Ar-Risalah Kepil",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "639",
                "npsn" => "69941696",
                "nama sekolah" => "MAS Ummul Quro",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "640",
                "npsn" => "69941697",
                "nama sekolah" => "MAS PROGRAM KETRAMPILAN MA ARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "641",
                "npsn" => "69956403",
                "nama sekolah" => "Muadalah Ma had Ilmu AlQurán (MIQ) Al Hikam",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "642",
                "npsn" => "69983503",
                "nama sekolah" => "MAS BERBAUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "643",
                "npsn" => "70009017",
                "nama sekolah" => "MAS AN NAWAWI SARWODADI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "644",
                "npsn" => "70009021",
                "nama sekolah" => "MAS BINA'UL-AKRAM GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "645",
                "npsn" => "70025915",
                "nama sekolah" => "MA Alawiyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "646",
                "npsn" => "70025923",
                "nama sekolah" => "MA AS SHOFA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "647",
                "npsn" => "70026103",
                "nama sekolah" => "MA TAKHASSUS AL-QUR'AN 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "648",
                "npsn" => "70030537",
                "nama sekolah" => "MA NURUL QUR'AN KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "649",
                "npsn" => "70033521",
                "nama sekolah" => "MA AL MAKSUM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "650",
                "npsn" => "20306801",
                "nama sekolah" => "SMKN 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "651",
                "npsn" => "20306802",
                "nama sekolah" => "SMKN 1 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "652",
                "npsn" => "20306803",
                "nama sekolah" => "SMKS MUHAMMADIYAH 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "653",
                "npsn" => "20306804",
                "nama sekolah" => "SMKS INFORMATIKA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "654",
                "npsn" => "20306810",
                "nama sekolah" => "SMKN 1 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "655",
                "npsn" => "20306811",
                "nama sekolah" => "SMK NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "656",
                "npsn" => "20306815",
                "nama sekolah" => "SMKS WIRATAMA 45 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "657",
                "npsn" => "20306817",
                "nama sekolah" => "SMKS WIRATAMA 45 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "658",
                "npsn" => "20306818",
                "nama sekolah" => "SMKS PURNAMA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "659",
                "npsn" => "20306820",
                "nama sekolah" => "SMK NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "660",
                "npsn" => "20331954",
                "nama sekolah" => "SMKS TAKHASSUS AL QURAN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "661",
                "npsn" => "20341355",
                "nama sekolah" => "SMKS AL MADANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "662",
                "npsn" => "20341359",
                "nama sekolah" => "SMKS PELITA AL QURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "663",
                "npsn" => "20345173",
                "nama sekolah" => "SMK ANDALUSIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "664",
                "npsn" => "20346709",
                "nama sekolah" => "SMKS GEMA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "665",
                "npsn" => "20360587",
                "nama sekolah" => "SMK KARYA MANDIRI NU GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "666",
                "npsn" => "20360644",
                "nama sekolah" => "SMKS MUHAMMADIYAH 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "667",
                "npsn" => "20362772",
                "nama sekolah" => "SMKS MUHAMMADIYAH 3 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "668",
                "npsn" => "20362773",
                "nama sekolah" => "SMKN 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "669",
                "npsn" => "20362774",
                "nama sekolah" => "SMKS NU KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "670",
                "npsn" => "20362775",
                "nama sekolah" => "SMKS AL GHOZALY",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "671",
                "npsn" => "20362776",
                "nama sekolah" => "SMKS JALALUDDIN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "672",
                "npsn" => "20362787",
                "nama sekolah" => "SMKS NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "673",
                "npsn" => "69754339",
                "nama sekolah" => "SMKN 1 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "674",
                "npsn" => "69774559",
                "nama sekolah" => "SMKS TARUNA NEGARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "675",
                "npsn" => "69888601",
                "nama sekolah" => "SMK GARDA NUSA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "676",
                "npsn" => "69896860",
                "nama sekolah" => "SMK AN-NUUR BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "677",
                "npsn" => "69896932",
                "nama sekolah" => "SMK ANDALUSIA 2 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "678",
                "npsn" => "69944506",
                "nama sekolah" => "SMK TAKHASSUS AS SAHRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "679",
                "npsn" => "69945063",
                "nama sekolah" => "SMK NEGERI 1 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "680",
                "npsn" => "20306767",
                "nama sekolah" => "SMP NEGERI 1 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "681",
                "npsn" => "20306768",
                "nama sekolah" => "SMP PGRI 3 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "682",
                "npsn" => "20306769",
                "nama sekolah" => "SMP MUHAMMADIYAH WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "683",
                "npsn" => "20306770",
                "nama sekolah" => "SMP MUHAMMADIYAH TIENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "684",
                "npsn" => "20306771",
                "nama sekolah" => "SMP MUHAMMADIYAH 3 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "685",
                "npsn" => "20306772",
                "nama sekolah" => "SMP MUHAMMADIYAH KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "686",
                "npsn" => "20306773",
                "nama sekolah" => "SMP MUHAMMADIYAH KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "687",
                "npsn" => "20306774",
                "nama sekolah" => "SMP MUHAMMADIYAH SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "688",
                "npsn" => "20306775",
                "nama sekolah" => "SMP MAARIF MLANDI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "689",
                "npsn" => "20306776",
                "nama sekolah" => "SMP MA ARIF KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "690",
                "npsn" => "20306778",
                "nama sekolah" => "SMP PGRI WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "691",
                "npsn" => "20306779",
                "nama sekolah" => "SMP PGRI LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "692",
                "npsn" => "20306790",
                "nama sekolah" => "SMP NEGERI 1 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "693",
                "npsn" => "20306791",
                "nama sekolah" => "SMP NEGERI 1 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "694",
                "npsn" => "20306792",
                "nama sekolah" => "SMP NEGERI 1 KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "695",
                "npsn" => "20306793",
                "nama sekolah" => "SMP NEGERI 1 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "696",
                "npsn" => "20306794",
                "nama sekolah" => "SMP NEGERI 1 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "697",
                "npsn" => "20306795",
                "nama sekolah" => "SMP NEGERI 1 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "698",
                "npsn" => "20306796",
                "nama sekolah" => "SMP NEGERI 1 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "699",
                "npsn" => "20306797",
                "nama sekolah" => "SMP TAKHASSUS AL QURAN KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "700",
                "npsn" => "20306798",
                "nama sekolah" => "SMP PGRI SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "701",
                "npsn" => "20306799",
                "nama sekolah" => "SMP KRISTEN BENDUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "702",
                "npsn" => "20306800",
                "nama sekolah" => "SMP KRISTEN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "703",
                "npsn" => "20306812",
                "nama sekolah" => "SMP ISLAM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "704",
                "npsn" => "20306813",
                "nama sekolah" => "SMP ISLAM WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "705",
                "npsn" => "20306814",
                "nama sekolah" => "SMP BHAKTI MULIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "706",
                "npsn" => "20306822",
                "nama sekolah" => "SMP NEGERI 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "707",
                "npsn" => "20306823",
                "nama sekolah" => "SMP NEGERI 6 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "708",
                "npsn" => "20306824",
                "nama sekolah" => "SMP NEGERI 3 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "709",
                "npsn" => "20306825",
                "nama sekolah" => "SMP NEGERI 3 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "710",
                "npsn" => "20306827",
                "nama sekolah" => "SMP NEGERI 3 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "711",
                "npsn" => "20306828",
                "nama sekolah" => "SMP NEGERI 3 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "712",
                "npsn" => "20306829",
                "nama sekolah" => "SMP NEGERI 3 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "713",
                "npsn" => "20306830",
                "nama sekolah" => "SMP NEGERI 3 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "714",
                "npsn" => "20306831",
                "nama sekolah" => "SMP NEGERI 3 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "715",
                "npsn" => "20306832",
                "nama sekolah" => "SMP NEGERI 3 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "716",
                "npsn" => "20306833",
                "nama sekolah" => "SMP NEGERI 3 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "717",
                "npsn" => "20306834",
                "nama sekolah" => "SMP NEGERI 3 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "718",
                "npsn" => "20306835",
                "nama sekolah" => "SMP NEGERI 5 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "719",
                "npsn" => "20306837",
                "nama sekolah" => "SMP NEGERI 5 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "720",
                "npsn" => "20306838",
                "nama sekolah" => "SMP NEGERI 5 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "721",
                "npsn" => "20306839",
                "nama sekolah" => "SMP NEGERI 4 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "722",
                "npsn" => "20306841",
                "nama sekolah" => "SMP NEGERI 4 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "723",
                "npsn" => "20306842",
                "nama sekolah" => "SMP NEGERI 4 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "724",
                "npsn" => "20306843",
                "nama sekolah" => "SMP NEGERI 4 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "725",
                "npsn" => "20306844",
                "nama sekolah" => "SMP NEGERI 3 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "726",
                "npsn" => "20306845",
                "nama sekolah" => "SMP NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "727",
                "npsn" => "20306846",
                "nama sekolah" => "SMP NEGERI 2 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "728",
                "npsn" => "20306847",
                "nama sekolah" => "SMP NEGERI 2 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "729",
                "npsn" => "20306848",
                "nama sekolah" => "SMP NEGERI 2 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "730",
                "npsn" => "20306849",
                "nama sekolah" => "SMP NEGERI 2 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "731",
                "npsn" => "20306850",
                "nama sekolah" => "SMP NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "732",
                "npsn" => "20306851",
                "nama sekolah" => "SMP NEGERI 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "733",
                "npsn" => "20306852",
                "nama sekolah" => "SMP NEGERI 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "734",
                "npsn" => "20306853",
                "nama sekolah" => "SMP NEGERI 1 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "735",
                "npsn" => "20306854",
                "nama sekolah" => "SMP NEGERI 1 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "736",
                "npsn" => "20306855",
                "nama sekolah" => "SMP NEGERI 2 KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "737",
                "npsn" => "20306856",
                "nama sekolah" => "SMP NEGERI 2 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "738",
                "npsn" => "20306857",
                "nama sekolah" => "SMP NEGERI 2 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "739",
                "npsn" => "20306858",
                "nama sekolah" => "SMP NEGERI 2 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "740",
                "npsn" => "20306859",
                "nama sekolah" => "SMP NEGERI 2 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "741",
                "npsn" => "20306860",
                "nama sekolah" => "SMP NEGERI 2 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "742",
                "npsn" => "20306861",
                "nama sekolah" => "SMP NEGERI 2 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "743",
                "npsn" => "20306862",
                "nama sekolah" => "SMP NEGERI 2 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "744",
                "npsn" => "20306863",
                "nama sekolah" => "SMP NEGERI 2 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "745",
                "npsn" => "20306865",
                "nama sekolah" => "SMP NEGERI 2 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "746",
                "npsn" => "20306866",
                "nama sekolah" => "SMP NEGERI 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "747",
                "npsn" => "20331693",
                "nama sekolah" => "SMP NEGERI 7 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "748",
                "npsn" => "20331801",
                "nama sekolah" => "SMP NEGERI 3 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "749",
                "npsn" => "20331802",
                "nama sekolah" => "SMP NEGERI 3 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "750",
                "npsn" => "20341086",
                "nama sekolah" => "SMP NEGERI 3 SATU ATAP SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "751",
                "npsn" => "20341087",
                "nama sekolah" => "SMP NEGERI 6 SATU ATAP KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "752",
                "npsn" => "20341088",
                "nama sekolah" => "SMP NEGERI 5 SATU ATAP KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "753",
                "npsn" => "20341089",
                "nama sekolah" => "SMP NEGERI 4 SATU ATAP WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "754",
                "npsn" => "20341090",
                "nama sekolah" => "SMP NEGERI 3 SATU ATAP KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "755",
                "npsn" => "20341091",
                "nama sekolah" => "SMP NEGERI 4 SATU ATAP SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "756",
                "npsn" => "20341092",
                "nama sekolah" => "SMP NEGERI 4 SATU ATAP KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "757",
                "npsn" => "20341093",
                "nama sekolah" => "SMP NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "758",
                "npsn" => "20341095",
                "nama sekolah" => "SMP NEGERI 6 SATU ATAP KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "759",
                "npsn" => "20341101",
                "nama sekolah" => "SMP DARUL FALACH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "760",
                "npsn" => "20341319",
                "nama sekolah" => "SMP RIFAIYAH 01 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "761",
                "npsn" => "20341505",
                "nama sekolah" => "SMP NEGERI 4 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "762",
                "npsn" => "20341506",
                "nama sekolah" => "SMP NEGERI 5 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "763",
                "npsn" => "20350845",
                "nama sekolah" => "SMP NEGERI 9 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "764",
                "npsn" => "20350846",
                "nama sekolah" => "SMP NEGERI 6 SATU ATAP WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "765",
                "npsn" => "20360249",
                "nama sekolah" => "SMP NEGERI 5 SATU ATAP SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "766",
                "npsn" => "20360528",
                "nama sekolah" => "SMP NEGERI 10 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "767",
                "npsn" => "20360529",
                "nama sekolah" => "SMP NEGERI 5 SATU ATAP KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "no" => "768",
                "npsn" => "20360530",
                "nama sekolah" => "SMP NEGERI 5 SATU ATAP SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "769",
                "npsn" => "20360531",
                "nama sekolah" => "SMP NEGERI 7 SATU ATAP KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "770",
                "npsn" => "20360532",
                "nama sekolah" => "SMP TAKHASSUS AL-QUR AN 2",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "771",
                "npsn" => "20360623",
                "nama sekolah" => "SMP NEGERI 4 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "772",
                "npsn" => "20362777",
                "nama sekolah" => "SMP NEGERI 7 SATU ATAP KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "773",
                "npsn" => "20363627",
                "nama sekolah" => "MTSS MAARIF GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "774",
                "npsn" => "20363628",
                "nama sekolah" => "MTSS MUH. MLANDI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "775",
                "npsn" => "20363629",
                "nama sekolah" => "MTSS MUH. GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "776",
                "npsn" => "20363630",
                "nama sekolah" => "MTSS MAARIF TIENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "777",
                "npsn" => "20363631",
                "nama sekolah" => "MTSS MAARIF KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "778",
                "npsn" => "20363632",
                "nama sekolah" => "MTSS AR RISALAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "779",
                "npsn" => "20363633",
                "nama sekolah" => "MTSS AS SAHRO REJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "780",
                "npsn" => "20363634",
                "nama sekolah" => "MTSS TERPADU AL-KAUTSAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "781",
                "npsn" => "20363635",
                "nama sekolah" => "MTSS MAARIF KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "782",
                "npsn" => "20363636",
                "nama sekolah" => "MTSS MAARIF SOJOKERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "783",
                "npsn" => "20363637",
                "nama sekolah" => "MTSN 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "784",
                "npsn" => "20363638",
                "nama sekolah" => "MTSS AL FUTUHIYYAH BUMIREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "785",
                "npsn" => "20363639",
                "nama sekolah" => "MTSS MANBA`UL ANWAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "786",
                "npsn" => "20363640",
                "nama sekolah" => "MTSS MA`ARIF SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "787",
                "npsn" => "20363641",
                "nama sekolah" => "MTSS HS LANCAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "788",
                "npsn" => "20363642",
                "nama sekolah" => "MTSS MAARIF KALIGOWONG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "789",
                "npsn" => "20363643",
                "nama sekolah" => "MTSS AL FATAH TIRIP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "790",
                "npsn" => "20363645",
                "nama sekolah" => "MTSS HIDAYATUSSIBYAN WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "791",
                "npsn" => "20363646",
                "nama sekolah" => "MTSS MAARIF GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "792",
                "npsn" => "20363647",
                "nama sekolah" => "MTSS AL GHOZALI SIWATU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "793",
                "npsn" => "20363648",
                "nama sekolah" => "MTSN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "794",
                "npsn" => "69725615",
                "nama sekolah" => "MTSS MAARIF KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "795",
                "npsn" => "69725616",
                "nama sekolah" => "MTSS MAARIF KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "796",
                "npsn" => "69725617",
                "nama sekolah" => "MTSS MAARIF SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "797",
                "npsn" => "69725618",
                "nama sekolah" => "MTSS MAARIF BAKALAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "798",
                "npsn" => "69725619",
                "nama sekolah" => "MTSS MAARIF SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "799",
                "npsn" => "69725799",
                "nama sekolah" => "MTSS MAARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "800",
                "npsn" => "69726360",
                "nama sekolah" => "MTSS SA AL HIKAM CENDEKIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "801",
                "npsn" => "69774560",
                "nama sekolah" => "SMPS ALAWIYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "no" => "802",
                "npsn" => "69788337",
                "nama sekolah" => "MTsS AN-NUUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "803",
                "npsn" => "69822426",
                "nama sekolah" => "MTSS Muhammadiyah Bener",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "804",
                "npsn" => "69856671",
                "nama sekolah" => "SMP NEGERI 4 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_01",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "805",
                "npsn" => "69888913",
                "nama sekolah" => "MTsS As Shofa",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "806",
                "npsn" => "69895564",
                "nama sekolah" => "SMP AL-MADINA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "807",
                "npsn" => "69899426",
                "nama sekolah" => "SMPIT INSAN MULIA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "808",
                "npsn" => "69918284",
                "nama sekolah" => "SMP TAKHASSUS AL-QURAN AN NIDA SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "809",
                "npsn" => "69928149",
                "nama sekolah" => "MTsSJALALUDDIN KUMEJING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "no" => "810",
                "npsn" => "69928151",
                "nama sekolah" => "MTsSNU UNGGULAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "811",
                "npsn" => "69928152",
                "nama sekolah" => "MTsS ASWAJA TERPADU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "812",
                "npsn" => "69928155",
                "nama sekolah" => "MTsSNURUL CHUSNA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "813",
                "npsn" => "69928165",
                "nama sekolah" => "MTsSMA`ARIF AL FIKRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "no" => "814",
                "npsn" => "69930689",
                "nama sekolah" => "SMP TAKHASSUS AL-QURAN SIROJUS SYUHADA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "815",
                "npsn" => "69955967",
                "nama sekolah" => "MTSS Ma arif Ar Ridho",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "816",
                "npsn" => "69961599",
                "nama sekolah" => "SMP ALFA ALI MASYKUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "817",
                "npsn" => "69962891",
                "nama sekolah" => "SMP NU 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "no" => "818",
                "npsn" => "69977315",
                "nama sekolah" => "MTS BERBAUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "819",
                "npsn" => "69978382",
                "nama sekolah" => "SMP PELITA AL QUR`AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "no" => "820",
                "npsn" => "69983098",
                "nama sekolah" => "MTSS AL MAKSUM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "821",
                "npsn" => "69983347",
                "nama sekolah" => "MTSS TAKHASSUS AL-QUR`AN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "no" => "822",
                "npsn" => "70008284",
                "nama sekolah" => "SMP TAKHASSUS AL QURAN AL FATHONIYYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "823",
                "npsn" => "70009009",
                "nama sekolah" => "MTSS HIDAYAH AL QUR'AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "824",
                "npsn" => "70009011",
                "nama sekolah" => "MTSS AL MAHFUDZ",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "no" => "825",
                "npsn" => "70009019",
                "nama sekolah" => "MTSS AL MUTTAQIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "826",
                "npsn" => "70009020",
                "nama sekolah" => "MTSS AN NAWAWI SARWODADI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "no" => "827",
                "npsn" => "70009053",
                "nama sekolah" => "MTSS TAKHASSUS AL-QUR'AN AL MUHIBBIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "828",
                "npsn" => "70009106",
                "nama sekolah" => "MTSS MULYO ALMUBAROK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "no" => "829",
                "npsn" => "70011625",
                "nama sekolah" => "SMP DARUSSALAM ISLAMIC BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "no" => "830",
                "npsn" => "70026086",
                "nama sekolah" => "MTs AL-BIRUNI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "no" => "831",
                "npsn" => "70027702",
                "nama sekolah" => "MTs Raudlotul Falah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "no" => "832",
                "npsn" => "70028317",
                "nama sekolah" => "SMP AL-MUNAWAROH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "no" => "833",
                "npsn" => "70030618",
                "nama sekolah" => "SMP AL-ISLAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "no" => "834",
                "npsn" => "70033270",
                "nama sekolah" => "MTs DARUTTHOLIBIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status" => "STATUS_SEKOLAH_TP_02",
                "jenis" => "SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ]
            
        ];

        foreach ($data as $datum) {
            Sekolah::create($datum);
        }
    }
}
