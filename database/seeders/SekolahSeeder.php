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
                "id" => "1",
                "npsn" => "69931401",
                "nama" => "PPS. AL MARSHUF",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
                
              ],
              [
                "id" => "2",
                "npsn" => "69931402",
                "nama" => "PPS. AL ALAWIYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "3",
                "npsn" => "69931403",
                "nama" => "PPS. DARUSSALIKHIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "4",
                "npsn" => "69931404",
                "nama" => "PPS. AL BAROKAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "5",
                "npsn" => "69931405",
                "nama" => "PPS. TANWIRUSSOBIR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "6",
                "npsn" => "69931406",
                "nama" => "PPS. AL ANWAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "7",
                "npsn" => "69931407",
                "nama" => "PPS. FATANUGRAHA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "8",
                "npsn" => "69937223",
                "nama" => "PDF ULYA AL-MUBAAROK MANGGISAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "9",
                "npsn" => "69951251",
                "nama" => "PPS Al Marshuf",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "10",
                "npsn" => "69951252",
                "nama" => "PPS Alawiyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "11",
                "npsn" => "69951253",
                "nama" => "PPS Darussalikin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "12",
                "npsn" => "69951254",
                "nama" => "PPS Al Aziziyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "13",
                "npsn" => "69951255",
                "nama" => "PPS Darul  Ulum",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "14",
                "npsn" => "69951256",
                "nama" => "PPS Roudlotul Muttaqin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "15",
                "npsn" => "69951257",
                "nama" => "PPS Al Mubarok",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "16",
                "npsn" => "69951258",
                "nama" => "PPS Al Barokah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "17",
                "npsn" => "69951259",
                "nama" => "PPS Tanwirusshobir",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "18",
                "npsn" => "69951260",
                "nama" => "PPS An Nidzhom",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "19",
                "npsn" => "69951261",
                "nama" => "PPS Daruttholibin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "20",
                "npsn" => "69951262",
                "nama" => "PPS Fata Nugraha",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "21",
                "npsn" => "69951263",
                "nama" => "PPS Al Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "22",
                "npsn" => "69951264",
                "nama" => "PPS Darunna im",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "23",
                "npsn" => "69951284",
                "nama" => "PPS Al Ukhuwah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "24",
                "npsn" => "69956422",
                "nama" => "PDF Wustho Al-Mubaarok Manggisan",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "25",
                "npsn" => "69957549",
                "nama" => "Al Ukhuwah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "26",
                "npsn" => "69957551",
                "nama" => "Al Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "27",
                "npsn" => "69957552",
                "nama" => "Daruttholibin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "28",
                "npsn" => "69971187",
                "nama" => "Darul Ulum",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "29",
                "npsn" => "69971188",
                "nama" => "As Syakirin",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "30",
                "npsn" => "69971189",
                "nama" => "Roudlotuth Tholibin Waththulab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "31",
                "npsn" => "69971190",
                "nama" => "Salafiyah Al Khusna",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "32",
                "npsn" => "69984383",
                "nama" => "Muadalah Aliyah Pesantren Roudhotuththolibin Waththullab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "33",
                "npsn" => "69984392",
                "nama" => "Pesantren Roudhotuththolibin Waththullab",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "34",
                "npsn" => "70024133",
                "nama" => "SPM. SALAF TAWANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_01",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "35",
                "npsn" => "P2963425",
                "nama" => "PKBM CATUR SAKTI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "36",
                "npsn" => "P2963555",
                "nama" => "PKBM SUMBER REJEKI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "37",
                "npsn" => "P2963717",
                "nama" => "PKBM CEMERLANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "38",
                "npsn" => "P2963718",
                "nama" => "PKBM GELORA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "39",
                "npsn" => "P2963736",
                "nama" => "PKBM CIPTA KARYA MANDIRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "40",
                "npsn" => "P2963738",
                "nama" => "PKBM CAHAYA ILMU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "41",
                "npsn" => "P2963739",
                "nama" => "PKBM SINDORO SUMBING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "42",
                "npsn" => "P2964265",
                "nama" => "PKBM YASMINA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "43",
                "npsn" => "P2964267",
                "nama" => "PKBM PROSPEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "44",
                "npsn" => "P2964287",
                "nama" => "PKBM ULUL ALBAB",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "45",
                "npsn" => "P2964428",
                "nama" => "PKBM SATRIA NEGARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "46",
                "npsn" => "P2964616",
                "nama" => "PKBM BINA ILMU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "47",
                "npsn" => "P2964617",
                "nama" => "PKBM TUNAS MANDIRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "48",
                "npsn" => "P2964642",
                "nama" => "PKBM AL HUDA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "49",
                "npsn" => "P9948196",
                "nama" => "SKB KABUPATEN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_03",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "50",
                "npsn" => "P9948574",
                "nama" => "PKBM BERGEMA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "51",
                "npsn" => "P9956855",
                "nama" => "PKBM PELITA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "52",
                "npsn" => "P9959834",
                "nama" => "PKBM Perintis",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "53",
                "npsn" => "P9998374",
                "nama" => "PKBM AN NIDZHOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_02",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "54",
                "npsn" => "20306577",
                "nama" => "SD NEGERI 3 KWADUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "55",
                "npsn" => "20306578",
                "nama" => "SD NEGERI 3 KERTEK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "56",
                "npsn" => "20306579",
                "nama" => "SD NEGERI 3 KEPIL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "57",
                "npsn" => "20306580",
                "nama" => "SD NEGERI 3 KEMIRIOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "58",
                "npsn" => "20306581",
                "nama" => "SD NEGERI 3 KEMBARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "59",
                "npsn" => "20306582",
                "nama" => "SD NEGERI 3 KARANGREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "60",
                "npsn" => "20306583",
                "nama" => "SD NEGERI 3 KALIWULUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "61",
                "npsn" => "20306584",
                "nama" => "SD NEGERI 3 KALIKARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "62",
                "npsn" => "20306585",
                "nama" => "SD NEGERI 3 KALIKAJAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "63",
                "npsn" => "20306586",
                "nama" => "SD NEGERI 3 KALIGOWONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "64",
                "npsn" => "20306587",
                "nama" => "SD NEGERI 3 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "65",
                "npsn" => "20306587",
                "nama" => "SD NEGERI 3 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "66",
                "npsn" => "20306589",
                "nama" => "SD NEGERI 3 ROPOH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "67",
                "npsn" => "20306591",
                "nama" => "SD NEGERI 2 PERBOTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "68",
                "npsn" => "20306592",
                "nama" => "SD NEGERI 2 PECEKELAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "69",
                "npsn" => "20306593",
                "nama" => "SD NEGERI 3 NGALIAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "70",
                "npsn" => "20306594",
                "nama" => "SD NEGERI 2 MADURETNO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "71",
                "npsn" => "20306595",
                "nama" => "SD NEGERI 3 LUMAJANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "72",
                "npsn" => "20306596",
                "nama" => "SD NEGERI 3 LEKSONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "73",
                "npsn" => "20306598",
                "nama" => "SD NEGERI 3 SAPURAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "74",
                "npsn" => "20306599",
                "nama" => "SD NEGERI 3 KALIBAWANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "75",
                "npsn" => "20306600",
                "nama" => "SD NEGERI 3 BATURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "76",
                "npsn" => "20306601",
                "nama" => "SD NEGERI 3 BANYUMUDAL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "77",
                "npsn" => "20306604",
                "nama" => "SD NEGERI 2 WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "78",
                "npsn" => "20306605",
                "nama" => "SD NEGERI 2 WONOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "79",
                "npsn" => "20306606",
                "nama" => "SD NEGERI 2 WONOROTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "80",
                "npsn" => "20306607",
                "nama" => "SD NEGERI 2 WONOKROMO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "81",
                "npsn" => "20306608",
                "nama" => "SD NEGERI 2 WONOKAMPIR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "82",
                "npsn" => "20306609",
                "nama" => "SD NEGERI 3 BESUKI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "83",
                "npsn" => "20306610",
                "nama" => "SD NEGERI 3 BINANGUN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "84",
                "npsn" => "20306611",
                "nama" => "SD NEGERI 3 JONGGOLSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "85",
                "npsn" => "20306612",
                "nama" => "SD NEGERI 3 JARAKSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "86",
                "npsn" => "20306613",
                "nama" => "SD NEGERI 3 JANGKRIKAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "87",
                "npsn" => "20306614",
                "nama" => "SD NEGERI 3 GUMELAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "88",
                "npsn" => "20306615",
                "nama" => "SD NEGERI 3 GONDOWULAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "89",
                "npsn" => "20306616",
                "nama" => "SD NEGERI 3 GARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "90",
                "npsn" => "20306618",
                "nama" => "SD NEGERI 3 DEMPEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "91",
                "npsn" => "20306619",
                "nama" => "SD NEGERI 3 BUTUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "92",
                "npsn" => "20306620",
                "nama" => "SD NEGERI 2 WINONGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "93",
                "npsn" => "20306621",
                "nama" => "SD NEGERI 2 SAWANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "94",
                "npsn" => "20306622",
                "nama" => "SD NEGERI CANDIREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "95",
                "npsn" => "20306623",
                "nama" => "SD NEGERI 8 WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "96",
                "npsn" => "20306627",
                "nama" => "SD NEGERI 5 WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "97",
                "npsn" => "20306630",
                "nama" => "SD NEGERI 5 BUTUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "98",
                "npsn" => "20306633",
                "nama" => "SD NEGERI ANDONGSILI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "99",
                "npsn" => "20306634",
                "nama" => "SD NEGERI CANDI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "100",
                "npsn" => "20306635",
                "nama" => "SD NEGERI CAMPURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "101",
                "npsn" => "20306636",
                "nama" => "SD NEGERI BURAT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "102",
                "npsn" => "20306637",
                "nama" => "SD NEGERI BUMIRESO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "103",
                "npsn" => "20306638",
                "nama" => "SD NEGERI BLEDERAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "104",
                "npsn" => "20306639",
                "nama" => "SD NEGERI BENER",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "105",
                "npsn" => "20306641",
                "nama" => "SD NEGERI BANJAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "106",
                "npsn" => "20306642",
                "nama" => "SD NEGERI BALEKAMBANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "107",
                "npsn" => "20306644",
                "nama" => "SD NEGERI 4 SAPURAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "108",
                "npsn" => "20306645",
                "nama" => "SD NEGERI 3 TRIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "109",
                "npsn" => "20306646",
                "nama" => "SD NEGERI 3 TLOGO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "110",
                "npsn" => "20306647",
                "nama" => "SD NEGERI 3 TIRIP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "111",
                "npsn" => "20306648",
                "nama" => "SD NEGERI 3 TEMPUREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "112",
                "npsn" => "20306649",
                "nama" => "SD NEGERI 3 TANJUNGANOM KECAMATAN KEPIL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "113",
                "npsn" => "20306650",
                "nama" => "SD NEGERI 2 TANJUNGANOM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "114",
                "npsn" => "20306651",
                "nama" => "SD NEGERI 3 SUKOHARJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "115",
                "npsn" => "20306653",
                "nama" => "SD NEGERI 2 SIGEDANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "116",
                "npsn" => "20306654",
                "nama" => "SD NEGERI 3 WADASLINTANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "117",
                "npsn" => "20306655",
                "nama" => "SD NEGERI 3 WONOKAMPIR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "118",
                "npsn" => "20306656",
                "nama" => "SD NEGERI 4 NGALIAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "119",
                "npsn" => "20306657",
                "nama" => "SD NEGERI 4 KWADUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "120",
                "npsn" => "20306658",
                "nama" => "SD NEGERI 4 KALIKARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "121",
                "npsn" => "20306659",
                "nama" => "SD NEGERI 4 JARAKSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "122",
                "npsn" => "20306670",
                "nama" => "SD NEGERI 4 GADINGREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "123",
                "npsn" => "20306671",
                "nama" => "SD NEGERI 4 BUTUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "124",
                "npsn" => "20306672",
                "nama" => "SD NEGERI 4 BINANGUN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "125",
                "npsn" => "20306674",
                "nama" => "SD NEGERI 3 WONOROTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "126",
                "npsn" => "20306676",
                "nama" => "SD NEGERI 2 WATUMALANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "127",
                "npsn" => "20306677",
                "nama" => "SD NEGERI 2 RECO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "128",
                "npsn" => "20306680",
                "nama" => "SD NEGERI 2 PARIKESIT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "129",
                "npsn" => "20306682",
                "nama" => "SD NEGERI 2 PAGEREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "130",
                "npsn" => "20306684",
                "nama" => "SD NEGERI 2 NGALIAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "131",
                "npsn" => "20306686",
                "nama" => "SD NEGERI 2 NGADIKUSUMAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "132",
                "npsn" => "20306687",
                "nama" => "SD NEGERI 2 NGADIKERSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "133",
                "npsn" => "20306689",
                "nama" => "SD NEGERI 2 PENGARENGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "134",
                "npsn" => "20306690",
                "nama" => "SD NEGERI 2 PUCUNGKEREP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "135",
                "npsn" => "20306692",
                "nama" => "SD NEGERI 2 PURWOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "136",
                "npsn" => "20306693",
                "nama" => "SD NEGERI 2 PUNGANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "137",
                "npsn" => "20306694",
                "nama" => "SD NEGERI 2 PULOSAREN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "138",
                "npsn" => "20306695",
                "nama" => "SD NEGERI 2 PUCUNGWETAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "139",
                "npsn" => "20306696",
                "nama" => "SD NEGERI 2 PLUNJARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "140",
                "npsn" => "20306697",
                "nama" => "SD NEGERI 2 PESODONGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "141",
                "npsn" => "20306699",
                "nama" => "SD NEGERI 2 MUDAL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "142",
                "npsn" => "20306700",
                "nama" => "SD NEGERI 2 MOJOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "143",
                "npsn" => "20306702",
                "nama" => "SD NEGERI 2 LANCAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "144",
                "npsn" => "20306703",
                "nama" => "SD NEGERI 2 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "145",
                "npsn" => "20306703",
                "nama" => "SD NEGERI 2 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "146",
                "npsn" => "20306705",
                "nama" => "SD NEGERI 2 KWADUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "147",
                "npsn" => "20306706",
                "nama" => "SD NEGERI 2 KUMEJING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "148",
                "npsn" => "20306707",
                "nama" => "SD NEGERI 2 KRINJING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "149",
                "npsn" => "20306708",
                "nama" => "SD NEGERI 2 KRASAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "150",
                "npsn" => "20306708",
                "nama" => "SD NEGERI 2 KRASAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "151",
                "npsn" => "20306710",
                "nama" => "SD NEGERI 2 LENGKONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "152",
                "npsn" => "20306711",
                "nama" => "SD NEGERI 2 LIMBANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "153",
                "npsn" => "20306712",
                "nama" => "SD NEGERI 2 MLIPAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "154",
                "npsn" => "20306713",
                "nama" => "SD NEGERI 2 MLANDI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "155",
                "npsn" => "20306716",
                "nama" => "SD NEGERI 2 MARON",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "156",
                "npsn" => "20306717",
                "nama" => "SD NEGERI 2 MANGUNREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "157",
                "npsn" => "20306720",
                "nama" => "SD NEGERI 2 LUMAJANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "158",
                "npsn" => "20306722",
                "nama" => "SD NEGERI 2 REJOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "159",
                "npsn" => "20306723",
                "nama" => "SD NEGERI 2 WARANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "160",
                "npsn" => "20306724",
                "nama" => "SD NEGERI 2 TEGESWETAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "161",
                "npsn" => "20306725",
                "nama" => "SD NEGERI 2 TEGALOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "162",
                "npsn" => "20306726",
                "nama" => "SD NEGERI 2 TEGALGOT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "163",
                "npsn" => "20306650",
                "nama" => "SD NEGERI 2 TANJUNGANOM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "164",
                "npsn" => "20306729",
                "nama" => "SD NEGERI 2 TAMBI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "165",
                "npsn" => "20306730",
                "nama" => "SD NEGERI 2 SUROYUDAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "166",
                "npsn" => "20306731",
                "nama" => "SD NEGERI 2 SURENGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "167",
                "npsn" => "20306732",
                "nama" => "SD NEGERI 2 SUMBEREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "168",
                "npsn" => "20306733",
                "nama" => "SD NEGERI 2 TEMPURANDUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "169",
                "npsn" => "20306734",
                "nama" => "SD NEGERI 2 TEMPUREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "170",
                "npsn" => "20306735",
                "nama" => "SD NEGERI 2 WADASLINTANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "171",
                "npsn" => "20306737",
                "nama" => "SD NEGERI 2 TRIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "172",
                "npsn" => "20306738",
                "nama" => "SD NEGERI 2 TRACAP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "173",
                "npsn" => "20306740",
                "nama" => "SD NEGERI 2 TLOGO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "174",
                "npsn" => "20306741",
                "nama" => "SD NEGERI 2 TIRIP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "175",
                "npsn" => "20306743",
                "nama" => "SD NEGERI 2 TEMPURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "176",
                "npsn" => "20306746",
                "nama" => "SD NEGERI 2 SENDANGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "177",
                "npsn" => "20306749",
                "nama" => "SD NEGERI 2 SEDAYU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "178",
                "npsn" => "20306753",
                "nama" => "SD NEGERI 2 ROJOIMO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "179",
                "npsn" => "20306754",
                "nama" => "SD NEGERI 2 ROGOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "180",
                "npsn" => "20306755",
                "nama" => "SD NEGERI 2 SERANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "181",
                "npsn" => "20306757",
                "nama" => "SD NEGERI 2 SUKOHARJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "182",
                "npsn" => "20306759",
                "nama" => "SD NEGERI 2 SOMOGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "183",
                "npsn" => "20306760",
                "nama" => "SD NEGERI 2 SOJOKERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "184",
                "npsn" => "20306761",
                "nama" => "SD NEGERI 2 SLUKATAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "185",
                "npsn" => "20306762",
                "nama" => "SD NEGERI SIWURAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "186",
                "npsn" => "20306763",
                "nama" => "SD NEGERI 2 SINDUPATEN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "187",
                "npsn" => "20306764",
                "nama" => "SD NEGERI 2 SIMBANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "188",
                "npsn" => "20306765",
                "nama" => "SD NEGERI 2 SIKUNANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "189",
                "npsn" => "20306766",
                "nama" => "SD NEGERI 2 RIMPAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "190",
                "npsn" => "20306868",
                "nama" => "SD NEGERI PAKUNCEN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "191",
                "npsn" => "20306869",
                "nama" => "SD NEGERI LARANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "192",
                "npsn" => "20306870",
                "nama" => "SD NEGERI KURIPAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "193",
                "npsn" => "20306871",
                "nama" => "SD NEGERI KUPANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "194",
                "npsn" => "20306872",
                "nama" => "SD KRISTEN BENDUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "195",
                "npsn" => "20306873",
                "nama" => "SD NEGERI KREO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "196",
                "npsn" => "20306874",
                "nama" => "SD NEGERI KESENENG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "197",
                "npsn" => "20306875",
                "nama" => "SD NEGERI KEJAJAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "198",
                "npsn" => "20306876",
                "nama" => "SD NEGERI KECIS",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "199",
                "npsn" => "20306877",
                "nama" => "SD NEGERI KEBRENGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "200",
                "npsn" => "20306878",
                "nama" => "SD NEGERI LARANGAN KULON",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "201",
                "npsn" => "20306879",
                "nama" => "SD NEGERI LEBAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "202",
                "npsn" => "20306880",
                "nama" => "SD NEGERI PAGERKUKUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "203",
                "npsn" => "20306881",
                "nama" => "SD NEGERI NGASINAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "204",
                "npsn" => "20306882",
                "nama" => "SD NEGERI NGADISALAM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "205",
                "npsn" => "20306883",
                "nama" => "SD NEGERI NGADIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "206",
                "npsn" => "20306884",
                "nama" => "SD NEGERI MUNGKUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "207",
                "npsn" => "20306885",
                "nama" => "SD NEGERI MERGOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "208",
                "npsn" => "20306886",
                "nama" => "SD NEGERI MENJER",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "209",
                "npsn" => "20306887",
                "nama" => "SD NEGERI MARONGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "210",
                "npsn" => "20306889",
                "nama" => "SD NEGERI LIPURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "211",
                "npsn" => "20306891",
                "nama" => "SD NEGERI KARANGANYAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "212",
                "npsn" => "20306892",
                "nama" => "SD NEGERI KAPULOGO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "213",
                "npsn" => "20306893",
                "nama" => "SD NEGERI GUNUNG TUGEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "214",
                "npsn" => "20306894",
                "nama" => "SD NEGERI GUNUNG TAWANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "215",
                "npsn" => "20306895",
                "nama" => "SD NEGERI GUNTURMADU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "216",
                "npsn" => "20306896",
                "nama" => "SD NEGERI GUMIWANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "217",
                "npsn" => "20306897",
                "nama" => "SD NEGERI GAMBARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "218",
                "npsn" => "20306898",
                "nama" => "SD NEGERI DURENSAWIT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "219",
                "npsn" => "20306899",
                "nama" => "SD NEGERI DIENG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "220",
                "npsn" => "20306900",
                "nama" => "SD NEGERI DERONGISOR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "221",
                "npsn" => "20306901",
                "nama" => "SD NEGERI DAMARKASIYAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "222",
                "npsn" => "20306902",
                "nama" => "SD NEGERI IGIRMRANAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "223",
                "npsn" => "20306903",
                "nama" => "SD ISLAM MIFTAHUL HUDA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "224",
                "npsn" => "20306904",
                "nama" => "SD NEGERI KALIPURU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "225",
                "npsn" => "20306905",
                "nama" => "SD NEGERI KALIANGET",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "226",
                "npsn" => "20306906",
                "nama" => "SD NEGERI KALIALANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "227",
                "npsn" => "20306907",
                "nama" => "SD NEGERI KAJEKSAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "228",
                "npsn" => "20306908",
                "nama" => "SD NEGERI KADIPATEN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "229",
                "npsn" => "20306909",
                "nama" => "SD NEGERI JOLONTORO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "230",
                "npsn" => "20306910",
                "nama" => "SD NEGERI JOJOGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "231",
                "npsn" => "20306911",
                "nama" => "SD NEGERI JOGOYITNAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "232",
                "npsn" => "20306912",
                "nama" => "SD NEGERI JEBENG PLAMPITAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "233",
                "npsn" => "20306913",
                "nama" => "SD NEGERI CLEDOK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "234",
                "npsn" => "20306914",
                "nama" => "SD NEGERI PANCURWENING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "235",
                "npsn" => "20306916",
                "nama" => "SD NEGERI TLOGODALEM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "236",
                "npsn" => "20306917",
                "nama" => "SD NEGERI TLOGO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "237",
                "npsn" => "20306918",
                "nama" => "SD NEGERI 1 TEMPUREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "238",
                "npsn" => "20306919",
                "nama" => "SD NEGERI TEGALSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "239",
                "npsn" => "20306920",
                "nama" => "SD NEGERI TAWANGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "240",
                "npsn" => "20306921",
                "nama" => "SD NEGERI TALUNOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "241",
                "npsn" => "20306922",
                "nama" => "SD NEGERI SUROJOYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "242",
                "npsn" => "20306924",
                "nama" => "SD NEGERI SUMBERWULAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "243",
                "npsn" => "20306925",
                "nama" => "SD NEGERI TLOGOMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "244",
                "npsn" => "20306926",
                "nama" => "SD NEGERI WILAYU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "245",
                "npsn" => "20306930",
                "nama" => "SD NEGERI WULUNGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "246",
                "npsn" => "20306931",
                "nama" => "SD NEGERI WRINGINANOM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "247",
                "npsn" => "20306932",
                "nama" => "SD NEGERI WONOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "248",
                "npsn" => "20306933",
                "nama" => "SD NEGERI WONOREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "249",
                "npsn" => "20306934",
                "nama" => "SD NEGERI WONOLELO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "250",
                "npsn" => "20306935",
                "nama" => "SD NEGERI WONOKERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "251",
                "npsn" => "20306936",
                "nama" => "SD NEGERI SUKOREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "252",
                "npsn" => "20306937",
                "nama" => "SD NEGERI SOJOPURO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "253",
                "npsn" => "20306938",
                "nama" => "SD NEGERI REJOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "254",
                "npsn" => "20306939",
                "nama" => "SD NEGERI RANDUSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "255",
                "npsn" => "20306940",
                "nama" => "SD NEGERI PURWOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "256",
                "npsn" => "20306941",
                "nama" => "SD NEGERI PURBOSONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "257",
                "npsn" => "20306942",
                "nama" => "SD NEGERI PULUS",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "258",
                "npsn" => "20306943",
                "nama" => "SD NEGERI 1 PUCUNGKEREP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "259",
                "npsn" => "20306944",
                "nama" => "SD NEGERI PLODONGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "260",
                "npsn" => "20306945",
                "nama" => "SD NEGERI PLOBANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "261",
                "npsn" => "20306946",
                "nama" => "SD NEGERI 1 PENGARENGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "262",
                "npsn" => "20306948",
                "nama" => "SD NEGERI SARIYOSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "263",
                "npsn" => "20306949",
                "nama" => "SD NEGERI SITIHARJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "264",
                "npsn" => "20306950",
                "nama" => "SD NEGERI SINDUAGUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "265",
                "npsn" => "20306951",
                "nama" => "SD NEGERI SIMBAREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "266",
                "npsn" => "20306952",
                "nama" => "SD NEGERI SIDOREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "267",
                "npsn" => "20306953",
                "nama" => "SD NEGERI SEMPOL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "268",
                "npsn" => "20306954",
                "nama" => "SD NEGERI SEMBUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "269",
                "npsn" => "20306955",
                "nama" => "SD NEGERI SEMAYU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "270",
                "npsn" => "20306956",
                "nama" => "SD NEGERI SELOMANIK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "271",
                "npsn" => "20306958",
                "nama" => "SD NEGERI PATAK BANTENG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "272",
                "npsn" => "20306959",
                "nama" => "SD NEGERI 1 BESUKI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "273",
                "npsn" => "20306960",
                "nama" => "SD KRISTEN 03",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "274",
                "npsn" => "20306962",
                "nama" => "SD ISLAM AL FATAH UTAMA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "275",
                "npsn" => "20306969",
                "nama" => "SD MAARIF TIENG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "276",
                "npsn" => "20306970",
                "nama" => "SD MUHAMMADIYAH TIENG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "277",
                "npsn" => "20306971",
                "nama" => "SD NEGERI 1 BESANI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "278",
                "npsn" => "20306972",
                "nama" => "SD NEGERI 1 BERAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "279",
                "npsn" => "20306973",
                "nama" => "SD NEGERI 1 BEJIARUM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "280",
                "npsn" => "20306974",
                "nama" => "SD NEGERI 1 BATURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "281",
                "npsn" => "20306975",
                "nama" => "SD NEGERI 1 BANYUMUDAL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "282",
                "npsn" => "20306976",
                "nama" => "SD NEGERI 1 BANYUKEMBAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "283",
                "npsn" => "20306977",
                "nama" => "SD NEGERI 1 ADIWARNO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "284",
                "npsn" => "20306978",
                "nama" => "SD TAKHASUS AL QURAN WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "285",
                "npsn" => "20306979",
                "nama" => "SD PIUS WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "286",
                "npsn" => "20307005",
                "nama" => "SD NEGERI 1 BOGORAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "287",
                "npsn" => "20307006",
                "nama" => "SD NEGERI 1 KALIKUNING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "288",
                "npsn" => "20307007",
                "nama" => "SD NEGERI 1 KAGUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "289",
                "npsn" => "20307008",
                "nama" => "SD NEGERI 1 JONGGOLSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "290",
                "npsn" => "20307009",
                "nama" => "SD NEGERI 1 JLAMPRANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "291",
                "npsn" => "20307009",
                "nama" => "SD NEGERI 1 JLAMPRANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "292",
                "npsn" => "20307011",
                "nama" => "SD NEGERI 1 JENGKOL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "293",
                "npsn" => "20307013",
                "nama" => "SD NEGERI 1 JARAKSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "294",
                "npsn" => "20307014",
                "nama" => "SD NEGERI 1 JANGKRIKAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "295",
                "npsn" => "20307015",
                "nama" => "SD NEGERI 1 GUMELAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "296",
                "npsn" => "20307016",
                "nama" => "SD NEGERI 1 GUMAWANG KIDUL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "297",
                "npsn" => "20306870",
                "nama" => "SD NEGERI KURIPAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "298",
                "npsn" => "20307018",
                "nama" => "SD NEGERI 1 KALIBAWANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "299",
                "npsn" => "20307019",
                "nama" => "SD NEGERI 1 KALIKARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "300",
                "npsn" => "20307020",
                "nama" => "SD NEGERI 1 KALIKAJAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "301",
                "npsn" => "20307021",
                "nama" => "SD NEGERI 1 KALIGUWO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "302",
                "npsn" => "20307022",
                "nama" => "SD NEGERI 1 KALIGOWONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "303",
                "npsn" => "20307023",
                "nama" => "SD NEGERI 1 KALIERANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "304",
                "npsn" => "20307024",
                "nama" => "SD NEGERI 1 KALIDESEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "305",
                "npsn" => "20307025",
                "nama" => "SD NEGERI 1 KALIDADAP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "306",
                "npsn" => "20307026",
                "nama" => "SD NEGERI 1 KALIBENING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "307",
                "npsn" => "20307027",
                "nama" => "SD NEGERI 1 KALIBEBER",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "308",
                "npsn" => "20307029",
                "nama" => "SD NEGERI 1 GONDOWULAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "309",
                "npsn" => "20307030",
                "nama" => "SD NEGERI CANDIYASAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "310",
                "npsn" => "20307031",
                "nama" => "SD NEGERI 1 CANDIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "311",
                "npsn" => "20307032",
                "nama" => "SD NEGERI 1 BUTUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "312",
                "npsn" => "20307033",
                "nama" => "SD NEGERI 1 BUNTU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "313",
                "npsn" => "20307034",
                "nama" => "SD NEGERI 1 BUMITIRTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "314",
                "npsn" => "20307035",
                "nama" => "SD NEGERI BUMIROSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "315",
                "npsn" => "20307036",
                "nama" => "SD NEGERI 1 BUMIREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "316",
                "npsn" => "20307037",
                "nama" => "SD NEGERI 1 BOWONGSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "317",
                "npsn" => "20307038",
                "nama" => "SD NEGERI 1 BOMERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "318",
                "npsn" => "20307039",
                "nama" => "SD NEGERI 1 DEMPEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "319",
                "npsn" => "20307040",
                "nama" => "SD NEGERI 1 DEPOK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "320",
                "npsn" => "20307041",
                "nama" => "SD NEGERI 1 GONDANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "321",
                "npsn" => "20307042",
                "nama" => "SD NEGERI 1 GLAGAH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "322",
                "npsn" => "20307043",
                "nama" => "SD NEGERI 1 GEMBLENGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "323",
                "npsn" => "20307044",
                "nama" => "SD NEGERI 1 GARUNGLOR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "324",
                "npsn" => "20307045",
                "nama" => "SD NEGERI 1 GARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "325",
                "npsn" => "20307046",
                "nama" => "SD NEGERI 1 GADINGREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "326",
                "npsn" => "20307047",
                "nama" => "SD NEGERI 1 GADINGSUKUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "327",
                "npsn" => "20307048",
                "nama" => "SD NEGERI 1 EROREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "328",
                "npsn" => "20307049",
                "nama" => "SD NEGERI 1 DERODUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "329",
                "npsn" => "20307050",
                "nama" => "SD NEGERI 1 BOJASARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "330",
                "npsn" => "20307144",
                "nama" => "SD NEGERI 2 BESANI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "331",
                "npsn" => "20307145",
                "nama" => "SD NEGERI 2 BERAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "332",
                "npsn" => "20307146",
                "nama" => "SD NEGERI 2 BEJIARUM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "333",
                "npsn" => "20307147",
                "nama" => "SD NEGERI 2 BATURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "334",
                "npsn" => "20307148",
                "nama" => "SD NEGERI 2 BANYUMUDAL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "335",
                "npsn" => "20307149",
                "nama" => "SD NEGERI 2 BANYUKEMBAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "336",
                "npsn" => "20307151",
                "nama" => "SD NEGERI 1 KERTEK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "337",
                "npsn" => "20307152",
                "nama" => "SD NEGERI 10 WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "338",
                "npsn" => "20307153",
                "nama" => "SD NEGERI 2 BESUKI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "339",
                "npsn" => "20307154",
                "nama" => "SD NEGERI 2 BOJASARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "340",
                "npsn" => "20307155",
                "nama" => "SD NEGERI 2 CANDIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "341",
                "npsn" => "20307156",
                "nama" => "SD NEGERI 2 BUTUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "342",
                "npsn" => "20307157",
                "nama" => "SD NEGERI 2 BUNTU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "343",
                "npsn" => "20307159",
                "nama" => "SD NEGERI 2 BUMIREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "344",
                "npsn" => "20307160",
                "nama" => "SD NEGERI 2 BOWONGSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "345",
                "npsn" => "20307161",
                "nama" => "SD NEGERI 2 BOMERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "346",
                "npsn" => "20307162",
                "nama" => "SD NEGERI 2 BOGORAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "347",
                "npsn" => "20307163",
                "nama" => "SD NEGERI 2 BINANGUN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "348",
                "npsn" => "20307164",
                "nama" => "SD NEGERI 1 WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "349",
                "npsn" => "20307165",
                "nama" => "SD NEGERI 1 WONOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "350",
                "npsn" => "20307166",
                "nama" => "SD NEGERI 1 TLOGO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "351",
                "npsn" => "20307167",
                "nama" => "SD NEGERI 1 TIRIP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "352",
                "npsn" => "20307168",
                "nama" => "SD NEGERI TIMBANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "353",
                "npsn" => "20307169",
                "nama" => "SD NEGERI 1 TEMPURSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "354",
                "npsn" => "20307170",
                "nama" => "SD NEGERI 1 TEMPURANDUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "355",
                "npsn" => "20307171",
                "nama" => "SD NEGERI 1 TEGESWETAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "356",
                "npsn" => "20307172",
                "nama" => "SD NEGERI 1 TEGALOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "357",
                "npsn" => "20307173",
                "nama" => "SD NEGERI 1 TEGALGOT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "358",
                "npsn" => "20307174",
                "nama" => "SD NEGERI 1 TANJUNGANOM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "359",
                "npsn" => "20307175",
                "nama" => "SD NEGERI 1 TLOGOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "360",
                "npsn" => "20307176",
                "nama" => "SD NEGERI 1 TRACAP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "361",
                "npsn" => "20307177",
                "nama" => "SD NEGERI 1 WONOROTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "362",
                "npsn" => "20307178",
                "nama" => "SD NEGERI 1 WONOKROMO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "363",
                "npsn" => "20307179",
                "nama" => "SD NEGERI 1 WONOKAMPIR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "364",
                "npsn" => "20307180",
                "nama" => "SD NEGERI 1 WINONGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "365",
                "npsn" => "20307181",
                "nama" => "SD NEGERI 1 WATUMALANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "366",
                "npsn" => "20307182",
                "nama" => "SD NEGERI 1 WARANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "367",
                "npsn" => "20307183",
                "nama" => "SD NEGERI 1 WADASLINTANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "368",
                "npsn" => "20307184",
                "nama" => "SD NEGERI TUMENGGUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "369",
                "npsn" => "20307185",
                "nama" => "SD NEGERI 1 TRIMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "370",
                "npsn" => "20307174",
                "nama" => "SD NEGERI 1 TANJUNGANOM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "371",
                "npsn" => "20307187",
                "nama" => "SD NEGERI 2 DEMPEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "372",
                "npsn" => "20307188",
                "nama" => "SD NEGERI 2 KEPIL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "373",
                "npsn" => "20307189",
                "nama" => "SD NEGERI 2 KALIWIRO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "374",
                "npsn" => "20307190",
                "nama" => "SD NEGERI KALIPUTIH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "375",
                "npsn" => "20307191",
                "nama" => "SD NEGERI 2 KALIMENDONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "376",
                "npsn" => "20307192",
                "nama" => "SD NEGERI 2 KALIKARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "377",
                "npsn" => "20307195",
                "nama" => "SD NEGERI 2 KALIGOWONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "378",
                "npsn" => "20307196",
                "nama" => "SD NEGERI 2 KALIERANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "379",
                "npsn" => "20307197",
                "nama" => "SD NEGERI 2 KALIDESEL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "380",
                "npsn" => "20307198",
                "nama" => "SD NEGERI 2 KALIWULUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "381",
                "npsn" => "20307199",
                "nama" => "SD NEGERI 2 KAPENCAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "382",
                "npsn" => "20307200",
                "nama" => "SD NEGERI 2 KEMIRIOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "383",
                "npsn" => "20307201",
                "nama" => "SD NEGERI 2 KEMBARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "384",
                "npsn" => "20307202",
                "nama" => "SD NEGERI 2 KEDALON",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "385",
                "npsn" => "20307203",
                "nama" => "SD NEGERI 2 KAYUGIYANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "386",
                "npsn" => "20307204",
                "nama" => "SD NEGERI KAUMAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "387",
                "npsn" => "20307205",
                "nama" => "SD NEGERI KARANGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "388",
                "npsn" => "20307206",
                "nama" => "SD NEGERI 2 KARANGLUHUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "389",
                "npsn" => "20307207",
                "nama" => "SD NEGERI 2 KARANGDUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "390",
                "npsn" => "20307208",
                "nama" => "SD NEGERI 2 KARANGANYAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "391",
                "npsn" => "20307209",
                "nama" => "SD NEGERI 2 KALIDADAP",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "392",
                "npsn" => "20307210",
                "nama" => "SD NEGERI 2 KALIBENING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "393",
                "npsn" => "20307211",
                "nama" => "SD NEGERI 2 GLAGAH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "394",
                "npsn" => "20307212",
                "nama" => "SD NEGERI 2 GONDOWULAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "395",
                "npsn" => "20307213",
                "nama" => "SD NEGERI 2 GEMBLENGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "396",
                "npsn" => "20307214",
                "nama" => "SD NEGERI 2 GARUNGLOR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "397",
                "npsn" => "20307215",
                "nama" => "SD NEGERI 2 GARUNG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "398",
                "npsn" => "20307216",
                "nama" => "SD NEGERI 2 GADINGREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "399",
                "npsn" => "20307217",
                "nama" => "SD NEGERI 2 GADINGSUKUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "400",
                "npsn" => "20307218",
                "nama" => "SD NEGERI 2 EROREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "401",
                "npsn" => "20307219",
                "nama" => "SD NEGERI 2 DERODUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "402",
                "npsn" => "20307220",
                "nama" => "SD NEGERI 2 GUMELAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "403",
                "npsn" => "20307221",
                "nama" => "SD NEGERI 2 JANGKRIKAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "404",
                "npsn" => "20307223",
                "nama" => "SD NEGERI 2 KALIBEBER",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "405",
                "npsn" => "20307224",
                "nama" => "SD NEGERI 2 KALIBAWANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "406",
                "npsn" => "20307226",
                "nama" => "SD NEGERI 2 KAGUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "407",
                "npsn" => "20307228",
                "nama" => "SD NEGERI 2 JLAMPRANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "408",
                "npsn" => "20307228",
                "nama" => "SD NEGERI 2 JLAMPRANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "409",
                "npsn" => "20307230",
                "nama" => "SD NEGERI 2 JENGKOL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "410",
                "npsn" => "20307231",
                "nama" => "SD NEGERI 2 JARAKSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "411",
                "npsn" => "20307233",
                "nama" => "SD NEGERI 1 TAMBI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "412",
                "npsn" => "20307236",
                "nama" => "SD NEGERI 1 MANGGIS",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "413",
                "npsn" => "20307237",
                "nama" => "SD NEGERI 1 MADURETNO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "414",
                "npsn" => "20307238",
                "nama" => "SD NEGERI 1 LUMAJANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "415",
                "npsn" => "20307239",
                "nama" => "SD NEGERI 1 LIMBANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "416",
                "npsn" => "20307240",
                "nama" => "SD NEGERI 1 LENGKONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "417",
                "npsn" => "20307241",
                "nama" => "SD NEGERI 1 LEKSONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "418",
                "npsn" => "20307242",
                "nama" => "SD NEGERI 1 LANCAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "419",
                "npsn" => "20307243",
                "nama" => "SD NEGERI 1 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "420",
                "npsn" => "20307243",
                "nama" => "SD NEGERI 1 LAMUK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "421",
                "npsn" => "20307245",
                "nama" => "SD NEGERI 1 MANGUNREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "422",
                "npsn" => "20307246",
                "nama" => "SD NEGERI 1 MARON",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "423",
                "npsn" => "20307247",
                "nama" => "SD NEGERI 1 NGADIKUSUMAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "424",
                "npsn" => "20307248",
                "nama" => "SD NEGERI 1 NGADIKERSO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "425",
                "npsn" => "20307249",
                "nama" => "SD NEGERI 1 MUTISARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "426",
                "npsn" => "20307250",
                "nama" => "SD NEGERI 1 MUDAL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "427",
                "npsn" => "20307251",
                "nama" => "SD NEGERI 1 MOJOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "428",
                "npsn" => "20307252",
                "nama" => "SD NEGERI 1 MLIPAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "429",
                "npsn" => "20307253",
                "nama" => "SD NEGERI 1 MLANDI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "430",
                "npsn" => "20307254",
                "nama" => "SD NEGERI MERGOLANGU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "431",
                "npsn" => "20307255",
                "nama" => "SD NEGERI 1 MEDONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "432",
                "npsn" => "20307256",
                "nama" => "SD NEGERI 1 KWADUNGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "433",
                "npsn" => "20307259",
                "nama" => "SD NEGERI 1 KARANGREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "434",
                "npsn" => "20307260",
                "nama" => "SD NEGERI 1 KARANGLUHUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "435",
                "npsn" => "20307261",
                "nama" => "SD NEGERI 1 KARANGDUWUR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "436",
                "npsn" => "20307262",
                "nama" => "SD NEGERI 1 KARANGANYAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "437",
                "npsn" => "20307263",
                "nama" => "SD NEGERI 1 KAPENCAR",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "438",
                "npsn" => "20307264",
                "nama" => "SD NEGERI 1 KALIWULUH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "439",
                "npsn" => "20307265",
                "nama" => "SD NEGERI 1 KALIWIRO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "440",
                "npsn" => "20307268",
                "nama" => "SD NEGERI 1 KAYUGIYANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "441",
                "npsn" => "20307269",
                "nama" => "SD NEGERI 1 KRINJING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "442",
                "npsn" => "20307270",
                "nama" => "SD NEGERI 1 KRASAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "443",
                "npsn" => "20307270",
                "nama" => "SD NEGERI 1 KRASAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "444",
                "npsn" => "20307272",
                "nama" => "SD NEGERI KRAMATAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "445",
                "npsn" => "20307273",
                "nama" => "SD NEGERI 1 KEPIL",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "446",
                "npsn" => "20307274",
                "nama" => "SD NEGERI 1 KEMIRIOMBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "447",
                "npsn" => "20307275",
                "nama" => "SD NEGERI 1 KEMBARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "448",
                "npsn" => "20307276",
                "nama" => "SD NEGERI 1 KEJIWAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "449",
                "npsn" => "20307277",
                "nama" => "SD NEGERI 1 KEDALON",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "450",
                "npsn" => "20307278",
                "nama" => "SD NEGERI 1 KALIMENDONG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "451",
                "npsn" => "20307279",
                "nama" => "SD NEGERI 1 NGALIAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "452",
                "npsn" => "20307280",
                "nama" => "SD NEGERI SURENGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "453",
                "npsn" => "20307281",
                "nama" => "SD NEGERI 1 SINDUPATEN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "454",
                "npsn" => "20307282",
                "nama" => "SD NEGERI 1 SIMBANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "455",
                "npsn" => "20307283",
                "nama" => "SD NEGERI 1 SIKUNANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "456",
                "npsn" => "20307284",
                "nama" => "SD NEGERI 1 SIGEDANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "457",
                "npsn" => "20307285",
                "nama" => "SD NEGERI 1 SERANG",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "458",
                "npsn" => "20307286",
                "nama" => "SD NEGERI 1 SENDANGSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "459",
                "npsn" => "20307287",
                "nama" => "SD NEGERI SELOMERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "460",
                "npsn" => "20307288",
                "nama" => "SD NEGERI 1 SELOKROMO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "461",
                "npsn" => "20307289",
                "nama" => "SD NEGERI 1 SEDAYU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "462",
                "npsn" => "20307291",
                "nama" => "SD NEGERI 1 SLUKATAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "463",
                "npsn" => "20307292",
                "nama" => "SD NEGERI 1 SUROYUDAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "464",
                "npsn" => "20307293",
                "nama" => "SD NEGERI SUMBERSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "465",
                "npsn" => "20307294",
                "nama" => "SD NEGERI 1 SUMBEREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "466",
                "npsn" => "20307295",
                "nama" => "SD NEGERI 1 SUMBERDALEM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "467",
                "npsn" => "20307296",
                "nama" => "SD NEGERI SUKORENO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "468",
                "npsn" => "20307297",
                "nama" => "SD NEGERI 1 SUKOHARJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "469",
                "npsn" => "20307298",
                "nama" => "SD NEGERI 1 SUDUNGDEWO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "470",
                "npsn" => "20307299",
                "nama" => "SD NEGERI 1 SOMOGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "471",
                "npsn" => "20307300",
                "nama" => "SD NEGERI 1 SOJOKERTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "472",
                "npsn" => "20307301",
                "nama" => "SD NEGERI 1 SAWANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "473",
                "npsn" => "20307302",
                "nama" => "SD NEGERI 1 SAPURAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "474",
                "npsn" => "20307303",
                "nama" => "SD NEGERI 1 PLUNJARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "475",
                "npsn" => "20307304",
                "nama" => "SD NEGERI 1 PESODONGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "476",
                "npsn" => "20307305",
                "nama" => "SD NEGERI 1 PERBOTO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "477",
                "npsn" => "20307306",
                "nama" => "SD NEGERI 1 PECEKELAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "478",
                "npsn" => "20307307",
                "nama" => "SD NEGERI PASURUHAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "479",
                "npsn" => "20307308",
                "nama" => "SD NEGERI 1 PARIKESIT",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "480",
                "npsn" => "20307309",
                "nama" => "SD NEGERI PANERUSAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "481",
                "npsn" => "20307310",
                "nama" => "SD NEGERI 1 PACARMULYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "482",
                "npsn" => "20307311",
                "nama" => "SD NEGERI 1 PAGEREJO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "483",
                "npsn" => "20307312",
                "nama" => "SD NEGERI 1 PUCUNGWETAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "484",
                "npsn" => "20307313",
                "nama" => "SD NEGERI 1 PULOSAREN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "485",
                "npsn" => "20307314",
                "nama" => "SD NEGERI 1 PUNGANGAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "486",
                "npsn" => "20307315",
                "nama" => "SD NEGERI SAMBEK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "487",
                "npsn" => "20307316",
                "nama" => "SD NEGERI 1 ROPOH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "488",
                "npsn" => "20307317",
                "nama" => "SD NEGERI 1 ROJOIMO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "489",
                "npsn" => "20307318",
                "nama" => "SD NEGERI 1 ROGOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "490",
                "npsn" => "20307319",
                "nama" => "SD NEGERI 1 RIMPAK",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "491",
                "npsn" => "20307320",
                "nama" => "SD NEGERI 1 REJOSARI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "492",
                "npsn" => "20307321",
                "nama" => "SD NEGERI 1 RECO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "493",
                "npsn" => "20307322",
                "nama" => "SD NEGERI 1 PURWOJIWO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "494",
                "npsn" => "20307323",
                "nama" => "SD NEGERI 1 PURWOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "495",
                "npsn" => "20331689",
                "nama" => "SD NEGERI 2 ROPOH",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "496",
                "npsn" => "20331690",
                "nama" => "SD NEGERI 2 TLOGOJATI",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "497",
                "npsn" => "20331692",
                "nama" => "SD MUHAMMADIYAH SUDAGARAN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "498",
                "npsn" => "20331773",
                "nama" => "SD NEGERI 1 BINANGUN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "499",
                "npsn" => "20331774",
                "nama" => "SD NEGERI 1 NGADISONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "500",
                "npsn" => "20331775",
                "nama" => "SD NEGERI 1 SURENGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "501",
                "npsn" => "20331776",
                "nama" => "SD NEGERI 1 WONOSROYO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "502",
                "npsn" => "20331779",
                "nama" => "SD NEGERI GRUGU",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "503",
                "npsn" => "20331780",
                "nama" => "SD NEGERI 2 NGADISONO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "504",
                "npsn" => "20331781",
                "nama" => "SD NEGERI 2 PURWOJIWO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "505",
                "npsn" => "20331786",
                "nama" => "SD NEGERI 3 SURENGEDE",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "506",
                "npsn" => "20331788",
                "nama" => "SD AL MADINA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "507",
                "npsn" => "20331790",
                "nama" => "SD IT INSAN MULIA WONOSOBO",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "508",
                "npsn" => "20341428",
                "nama" => "SD MBF AL ADZKIYA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "509",
                "npsn" => "20353574",
                "nama" => "SD NEGERI 1 KUMEJING",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "510",
                "npsn" => "60711028",
                "nama" => "MIS MAARIF TEGALSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "511",
                "npsn" => "60711029",
                "nama" => "MIS MAARIF GESING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "512",
                "npsn" => "60711030",
                "nama" => "MIS MAARIF TOPENGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "513",
                "npsn" => "60711031",
                "nama" => "MIS MAARIF KANDANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "514",
                "npsn" => "60711032",
                "nama" => "MIS MAARIF KALIJERUK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "515",
                "npsn" => "60711033",
                "nama" => "MIS MAARIF MARON",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "516",
                "npsn" => "60711034",
                "nama" => "MIS MAARIF LARANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "517",
                "npsn" => "60711035",
                "nama" => "MIN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "518",
                "npsn" => "60711036",
                "nama" => "MIS MA`ARIF KARANGSAMBUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "519",
                "npsn" => "60711037",
                "nama" => "MIS MUH KALIALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "520",
                "npsn" => "60711038",
                "nama" => "MIS MUH 01 GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "521",
                "npsn" => "60711039",
                "nama" => "MIS MUH 02 GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "522",
                "npsn" => "60711040",
                "nama" => "MIS MUH KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "523",
                "npsn" => "60711041",
                "nama" => "MIS MA ARIF TRACAP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "524",
                "npsn" => "60711042",
                "nama" => "MIS MAARIF MEDONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "525",
                "npsn" => "60711043",
                "nama" => "MIS MUHAMMADIYAH KARANGMANGU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "526",
                "npsn" => "60711044",
                "nama" => "MIS MUH.BENDUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "527",
                "npsn" => "60711045",
                "nama" => "MIS MA ARIF BOWONGSO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "528",
                "npsn" => "60711046",
                "nama" => "MIS MA ARIF KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "529",
                "npsn" => "60711047",
                "nama" => "MIS MA ARIF CLENGKOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "530",
                "npsn" => "60711048",
                "nama" => "MIS MAARIF LEBAK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "531",
                "npsn" => "60711049",
                "nama" => "MIS MAARIF CAMPURSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "532",
                "npsn" => "60711050",
                "nama" => "MIS MAARIF TAMBI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "533",
                "npsn" => "60711051",
                "nama" => "MIS MUHAMMADIYAH KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "534",
                "npsn" => "60711052",
                "nama" => "MIS MAARIF SERANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "535",
                "npsn" => "60711053",
                "nama" => "MIS MAARIF JOJOGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "536",
                "npsn" => "60711054",
                "nama" => "MIS MAARIF PATAKBANTENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "537",
                "npsn" => "60711055",
                "nama" => "MIS MAARIF KALILEMBU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "538",
                "npsn" => "60711056",
                "nama" => "MIS MAARIF SEMBUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "539",
                "npsn" => "60711057",
                "nama" => "MIS MAARIF BENER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "540",
                "npsn" => "60711058",
                "nama" => "MIS MUH BENER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "541",
                "npsn" => "60711059",
                "nama" => "MIS ISLAMIYAH GADINGREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "542",
                "npsn" => "60711060",
                "nama" => "MIS MAARIF GADINGREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "543",
                "npsn" => "60711061",
                "nama" => "MIS MAARIF KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "544",
                "npsn" => "60711062",
                "nama" => "MIS MUHAMMADIYAH BERAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "545",
                "npsn" => "60711063",
                "nama" => "MIS MAARIF REJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "546",
                "npsn" => "60711064",
                "nama" => "MIS MAARIF NGALIYAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "547",
                "npsn" => "60711065",
                "nama" => "MIS MAARIF KARANGLUHUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "548",
                "npsn" => "60711066",
                "nama" => "MIS MAARIF SUREN GEDE",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "549",
                "npsn" => "60711067",
                "nama" => "MIS MUHAMMADIYAH TLOGODALEM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "550",
                "npsn" => "60711068",
                "nama" => "MIS MUH KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "551",
                "npsn" => "60711069",
                "nama" => "MIS MA`ARIF BUDI LUHUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "552",
                "npsn" => "60711070",
                "nama" => "MIS RIFAIYAH DALANGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "553",
                "npsn" => "60711071",
                "nama" => "MIS MAARIF SOJOKERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "554",
                "npsn" => "60711072",
                "nama" => "MIS MUHAMMADIYAH LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "555",
                "npsn" => "60711073",
                "nama" => "MIS MUHAMMADIYAH BESANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "556",
                "npsn" => "60711074",
                "nama" => "MIS MAARIF LIPURSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "557",
                "npsn" => "60711075",
                "nama" => "MIS MAARIF BESANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "558",
                "npsn" => "60711076",
                "nama" => "MIS MAARIF KLESMAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "559",
                "npsn" => "60711077",
                "nama" => "MIS MAARIF SOJOPURO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "560",
                "npsn" => "60711078",
                "nama" => "MIS MAARIF MOJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "561",
                "npsn" => "60711079",
                "nama" => "MIS MANGGISAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "562",
                "npsn" => "60711080",
                "nama" => "MIS MAARIF KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "563",
                "npsn" => "60711081",
                "nama" => "MIS MUHAMADIYAH KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "564",
                "npsn" => "60711082",
                "nama" => "MIS MAARIF KEBONDALEM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "565",
                "npsn" => "60711083",
                "nama" => "MIS MAARIF WONOKROMO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "566",
                "npsn" => "60711084",
                "nama" => "MIS MAARIF KEBRENGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "567",
                "npsn" => "60711085",
                "nama" => "MIS MAARIF SLUKATAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "568",
                "npsn" => "60711086",
                "nama" => "MIS MA`ARIF TALUNOMBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "569",
                "npsn" => "60711087",
                "nama" => "MIS MA`ARIF BENDOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "570",
                "npsn" => "60711088",
                "nama" => "MIS ISLAMIYAH JOLONTORO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "571",
                "npsn" => "60711089",
                "nama" => "MIS MUHAMMADIYAH MARONGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "572",
                "npsn" => "60711090",
                "nama" => "MIS MA`ARIF NGADIKERSO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "573",
                "npsn" => "60711091",
                "nama" => "MIS GUPPI SUMBERWULAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "574",
                "npsn" => "60711092",
                "nama" => "MIS MUH. SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "575",
                "npsn" => "60711093",
                "nama" => "MIS MAARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "576",
                "npsn" => "60711094",
                "nama" => "MIS MAARIF KARANGANYAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "577",
                "npsn" => "60711095",
                "nama" => "MIS HIDAYATUSSIBYAN KUMEJING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "578",
                "npsn" => "60711096",
                "nama" => "MIS HIDAYATUSSIBYAN LANCAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "579",
                "npsn" => "60711097",
                "nama" => "MIS MAARIF KALIDADAP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "580",
                "npsn" => "60711098",
                "nama" => "MIS MAARIF AL FATAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "581",
                "npsn" => "60711099",
                "nama" => "MIS MAARIF SOMOGEDE",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "582",
                "npsn" => "60711100",
                "nama" => "MIS MAARIF TRIMULYO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "583",
                "npsn" => "60711101",
                "nama" => "MIS HIDAYATUSSIBYAN WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "584",
                "npsn" => "60711102",
                "nama" => "MIS MAARIF PUKIRAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "585",
                "npsn" => "60711103",
                "nama" => "MIS MAARIF KALIGOWONG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "586",
                "npsn" => "60711104",
                "nama" => "MIS GUPPI GUMAWANG LOR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "587",
                "npsn" => "60711105",
                "nama" => "MIS MAARIF GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "588",
                "npsn" => "60711106",
                "nama" => "MIS MAARIF KLIWONAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "589",
                "npsn" => "60711107",
                "nama" => "MIS MAARIF KEJIWAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "590",
                "npsn" => "60711108",
                "nama" => "MIS MAARIF KALIANGET",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "591",
                "npsn" => "69725747",
                "nama" => "MIS MAARIF KAPULOGO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "592",
                "npsn" => "69725748",
                "nama" => "MIS MAARIF TEGALGOT",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "593",
                "npsn" => "69725749",
                "nama" => "MIS MUHAMMADIYAH TANJUNGANOM",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "594",
                "npsn" => "69725750",
                "nama" => "MIS MAARIF ROPOH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "595",
                "npsn" => "69725751",
                "nama" => "MIS MAARIF TUMENGGUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "596",
                "npsn" => "69725752",
                "nama" => "MIS MAARIF TAWANGSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "597",
                "npsn" => "69725753",
                "nama" => "MIS MAARIF GUNUNGTAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "598",
                "npsn" => "69725754",
                "nama" => "MIS MAARIF NGADIMULYO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "599",
                "npsn" => "69725755",
                "nama" => "MIS MAARIF BULUSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "600",
                "npsn" => "69725756",
                "nama" => "MIS MUHAMMADIYAH MUNGKUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "601",
                "npsn" => "69725757",
                "nama" => "MIS MAARIF SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "602",
                "npsn" => "69725758",
                "nama" => "MIS MAARIF MERGOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "603",
                "npsn" => "69725786",
                "nama" => "MIS MAARIF KADIPATEN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "604",
                "npsn" => "69928160",
                "nama" => "MIS AL QUR`AN AL KAYYIS",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "605",
                "npsn" => "69928163",
                "nama" => "MISMA`ARIF NU SIRANGKEL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "606",
                "npsn" => "69928164",
                "nama" => "MISMK AN NUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "607",
                "npsn" => "69961892",
                "nama" => "SD NASIONAL KAKUKA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "608",
                "npsn" => "70002221",
                "nama" => "SD ABF KHALIFA",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "609",
                "npsn" => "70031663",
                "nama" => "SD TAHFIDZ SA`ADATUL ISLAM",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "610",
                "npsn" => "70032559",
                "nama" => "SD ISLAM BAITUL MUJAHIDIN",
                "jenjang" => "SD",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "611",
                "npsn" => "70033120",
                "nama" => "MI AN NAWAWI ISLAMIC BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "612",
                "npsn" => "70033492",
                "nama" => "MI MA'ARIF AL-FATTAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_05",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "613",
                "npsn" => "20306806",
                "nama" => "SMA NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "614",
                "npsn" => "20306807",
                "nama" => "SMA NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "615",
                "npsn" => "20306808",
                "nama" => "SMAN 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "616",
                "npsn" => "20306809",
                "nama" => "SMA NEGERI 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "617",
                "npsn" => "20306821",
                "nama" => "SMAN 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "618",
                "npsn" => "20306867",
                "nama" => "SMA NEGERI 1 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "619",
                "npsn" => "20306915",
                "nama" => "SMAN 1 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "620",
                "npsn" => "20331700",
                "nama" => "SMA NEGERI 1 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "621",
                "npsn" => "20331701",
                "nama" => "SMAS TAKHASSUS AS SAHRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "622",
                "npsn" => "20331702",
                "nama" => "SMAS KRISTEN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "623",
                "npsn" => "20331704",
                "nama" => "SMAS MA ARIF WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "624",
                "npsn" => "20331705",
                "nama" => "SMAS NU KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "625",
                "npsn" => "20331707",
                "nama" => "SMAS TAKHASSUS AL-QUR AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "626",
                "npsn" => "20331819",
                "nama" => "SMAS MA ARIF LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "627",
                "npsn" => "20331953",
                "nama" => "SMAS MUHAMMADIYAH WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "628",
                "npsn" => "20341094",
                "nama" => "SMAN 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_08",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "629",
                "npsn" => "20363259",
                "nama" => "MAS MUHAMMADIYAH KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "630",
                "npsn" => "20363260",
                "nama" => "MAN 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "631",
                "npsn" => "20363261",
                "nama" => "MAN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "632",
                "npsn" => "69734236",
                "nama" => "MAS TAKHASSUS ALQURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "633",
                "npsn" => "69941690",
                "nama" => "MAS SATU ATAP AL HIKAM CENDEKIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "634",
                "npsn" => "69941691",
                "nama" => "MAS AL FATAH GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "635",
                "npsn" => "69941692",
                "nama" => "MAS Matholi Ul Anwar",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "636",
                "npsn" => "69941693",
                "nama" => "MAS I ANATUL QUR AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "637",
                "npsn" => "69941694",
                "nama" => "MAS NU DARUL ISLAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "638",
                "npsn" => "69941695",
                "nama" => "MAS Ar-Risalah Kepil",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "639",
                "npsn" => "69941696",
                "nama" => "MAS Ummul Quro",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "640",
                "npsn" => "69941697",
                "nama" => "MAS PROGRAM KETRAMPILAN MA ARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "641",
                "npsn" => "69956403",
                "nama" => "Muadalah Ma had Ilmu AlQurán (MIQ) Al Hikam",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "642",
                "npsn" => "69983503",
                "nama" => "MAS BERBAUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "643",
                "npsn" => "70009017",
                "nama" => "MAS AN NAWAWI SARWODADI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "644",
                "npsn" => "70009021",
                "nama" => "MAS BINA'UL-AKRAM GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "645",
                "npsn" => "70025915",
                "nama" => "MA Alawiyah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "646",
                "npsn" => "70025923",
                "nama" => "MA AS SHOFA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "647",
                "npsn" => "70026103",
                "nama" => "MA TAKHASSUS AL-QUR'AN 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "648",
                "npsn" => "70030537",
                "nama" => "MA NURUL QUR'AN KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "649",
                "npsn" => "70033521",
                "nama" => "MA AL MAKSUM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_09",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "650",
                "npsn" => "20306801",
                "nama" => "SMKN 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "651",
                "npsn" => "20306802",
                "nama" => "SMKN 1 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "652",
                "npsn" => "20306803",
                "nama" => "SMKS MUHAMMADIYAH 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "653",
                "npsn" => "20306804",
                "nama" => "SMKS INFORMATIKA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "654",
                "npsn" => "20306810",
                "nama" => "SMKN 1 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "655",
                "npsn" => "20306811",
                "nama" => "SMK NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "656",
                "npsn" => "20306815",
                "nama" => "SMKS WIRATAMA 45 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "657",
                "npsn" => "20306817",
                "nama" => "SMKS WIRATAMA 45 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "658",
                "npsn" => "20306818",
                "nama" => "SMKS PURNAMA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "659",
                "npsn" => "20306820",
                "nama" => "SMK NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "660",
                "npsn" => "20331954",
                "nama" => "SMKS TAKHASSUS AL QURAN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "661",
                "npsn" => "20341355",
                "nama" => "SMKS AL MADANI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "662",
                "npsn" => "20341359",
                "nama" => "SMKS PELITA AL QURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "663",
                "npsn" => "20345173",
                "nama" => "SMK ANDALUSIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "664",
                "npsn" => "20346709",
                "nama" => "SMKS GEMA NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "665",
                "npsn" => "20360587",
                "nama" => "SMK KARYA MANDIRI NU GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "666",
                "npsn" => "20360644",
                "nama" => "SMKS MUHAMMADIYAH 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "667",
                "npsn" => "20362772",
                "nama" => "SMKS MUHAMMADIYAH 3 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "668",
                "npsn" => "20362773",
                "nama" => "SMKN 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "669",
                "npsn" => "20362774",
                "nama" => "SMKS NU KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "670",
                "npsn" => "20362775",
                "nama" => "SMKS AL GHOZALY",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "671",
                "npsn" => "20362776",
                "nama" => "SMKS JALALUDDIN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "672",
                "npsn" => "20362787",
                "nama" => "SMKS NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "673",
                "npsn" => "69754339",
                "nama" => "SMKN 1 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "674",
                "npsn" => "69774559",
                "nama" => "SMKS TARUNA NEGARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "675",
                "npsn" => "69888601",
                "nama" => "SMK GARDA NUSA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "676",
                "npsn" => "69896860",
                "nama" => "SMK AN-NUUR BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "677",
                "npsn" => "69896932",
                "nama" => "SMK ANDALUSIA 2 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "678",
                "npsn" => "69944506",
                "nama" => "SMK TAKHASSUS AS SAHRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "679",
                "npsn" => "69945063",
                "nama" => "SMK NEGERI 1 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_10",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "680",
                "npsn" => "20306767",
                "nama" => "SMP NEGERI 1 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "681",
                "npsn" => "20306768",
                "nama" => "SMP PGRI 3 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "682",
                "npsn" => "20306769",
                "nama" => "SMP MUHAMMADIYAH WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "683",
                "npsn" => "20306770",
                "nama" => "SMP MUHAMMADIYAH TIENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "684",
                "npsn" => "20306771",
                "nama" => "SMP MUHAMMADIYAH 3 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "685",
                "npsn" => "20306772",
                "nama" => "SMP MUHAMMADIYAH KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "686",
                "npsn" => "20306773",
                "nama" => "SMP MUHAMMADIYAH KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "687",
                "npsn" => "20306774",
                "nama" => "SMP MUHAMMADIYAH SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "688",
                "npsn" => "20306775",
                "nama" => "SMP MAARIF MLANDI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "689",
                "npsn" => "20306776",
                "nama" => "SMP MA ARIF KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "690",
                "npsn" => "20306778",
                "nama" => "SMP PGRI WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "691",
                "npsn" => "20306779",
                "nama" => "SMP PGRI LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "692",
                "npsn" => "20306790",
                "nama" => "SMP NEGERI 1 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "693",
                "npsn" => "20306791",
                "nama" => "SMP NEGERI 1 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "694",
                "npsn" => "20306792",
                "nama" => "SMP NEGERI 1 KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "695",
                "npsn" => "20306793",
                "nama" => "SMP NEGERI 1 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "696",
                "npsn" => "20306794",
                "nama" => "SMP NEGERI 1 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "697",
                "npsn" => "20306795",
                "nama" => "SMP NEGERI 1 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "698",
                "npsn" => "20306796",
                "nama" => "SMP NEGERI 1 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "699",
                "npsn" => "20306797",
                "nama" => "SMP TAKHASSUS AL QURAN KALIBEBER",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "700",
                "npsn" => "20306798",
                "nama" => "SMP PGRI SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "701",
                "npsn" => "20306799",
                "nama" => "SMP KRISTEN BENDUNGAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "702",
                "npsn" => "20306800",
                "nama" => "SMP KRISTEN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "703",
                "npsn" => "20306812",
                "nama" => "SMP ISLAM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "704",
                "npsn" => "20306813",
                "nama" => "SMP ISLAM WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "705",
                "npsn" => "20306814",
                "nama" => "SMP BHAKTI MULIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "706",
                "npsn" => "20306822",
                "nama" => "SMP NEGERI 1 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "707",
                "npsn" => "20306823",
                "nama" => "SMP NEGERI 6 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "708",
                "npsn" => "20306824",
                "nama" => "SMP NEGERI 3 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "709",
                "npsn" => "20306825",
                "nama" => "SMP NEGERI 3 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "710",
                "npsn" => "20306827",
                "nama" => "SMP NEGERI 3 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "711",
                "npsn" => "20306828",
                "nama" => "SMP NEGERI 3 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "712",
                "npsn" => "20306829",
                "nama" => "SMP NEGERI 3 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "713",
                "npsn" => "20306830",
                "nama" => "SMP NEGERI 3 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "714",
                "npsn" => "20306831",
                "nama" => "SMP NEGERI 3 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "715",
                "npsn" => "20306832",
                "nama" => "SMP NEGERI 3 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "716",
                "npsn" => "20306833",
                "nama" => "SMP NEGERI 3 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "717",
                "npsn" => "20306834",
                "nama" => "SMP NEGERI 3 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "718",
                "npsn" => "20306835",
                "nama" => "SMP NEGERI 5 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "719",
                "npsn" => "20306837",
                "nama" => "SMP NEGERI 5 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "720",
                "npsn" => "20306838",
                "nama" => "SMP NEGERI 5 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "721",
                "npsn" => "20306839",
                "nama" => "SMP NEGERI 4 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "722",
                "npsn" => "20306841",
                "nama" => "SMP NEGERI 4 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "723",
                "npsn" => "20306842",
                "nama" => "SMP NEGERI 4 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "724",
                "npsn" => "20306843",
                "nama" => "SMP NEGERI 4 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "725",
                "npsn" => "20306844",
                "nama" => "SMP NEGERI 3 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "726",
                "npsn" => "20306845",
                "nama" => "SMP NEGERI 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "727",
                "npsn" => "20306846",
                "nama" => "SMP NEGERI 2 KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "728",
                "npsn" => "20306847",
                "nama" => "SMP NEGERI 2 KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "729",
                "npsn" => "20306848",
                "nama" => "SMP NEGERI 2 KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "730",
                "npsn" => "20306849",
                "nama" => "SMP NEGERI 2 GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "731",
                "npsn" => "20306850",
                "nama" => "SMP NEGERI 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "732",
                "npsn" => "20306851",
                "nama" => "SMP NEGERI 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "733",
                "npsn" => "20306852",
                "nama" => "SMP NEGERI 1 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "734",
                "npsn" => "20306853",
                "nama" => "SMP NEGERI 1 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "735",
                "npsn" => "20306854",
                "nama" => "SMP NEGERI 1 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "736",
                "npsn" => "20306855",
                "nama" => "SMP NEGERI 2 KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "737",
                "npsn" => "20306856",
                "nama" => "SMP NEGERI 2 KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "738",
                "npsn" => "20306857",
                "nama" => "SMP NEGERI 2 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "739",
                "npsn" => "20306858",
                "nama" => "SMP NEGERI 2 WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "740",
                "npsn" => "20306859",
                "nama" => "SMP NEGERI 2 SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "741",
                "npsn" => "20306860",
                "nama" => "SMP NEGERI 2 SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "742",
                "npsn" => "20306861",
                "nama" => "SMP NEGERI 2 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "743",
                "npsn" => "20306862",
                "nama" => "SMP NEGERI 2 MOJOTENGAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "744",
                "npsn" => "20306863",
                "nama" => "SMP NEGERI 2 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "745",
                "npsn" => "20306865",
                "nama" => "SMP NEGERI 2 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "746",
                "npsn" => "20306866",
                "nama" => "SMP NEGERI 1 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "747",
                "npsn" => "20331693",
                "nama" => "SMP NEGERI 7 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "748",
                "npsn" => "20331801",
                "nama" => "SMP NEGERI 3 LEKSONO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "749",
                "npsn" => "20331802",
                "nama" => "SMP NEGERI 3 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "750",
                "npsn" => "20341086",
                "nama" => "SMP NEGERI 3 SATU ATAP SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "751",
                "npsn" => "20341087",
                "nama" => "SMP NEGERI 6 SATU ATAP KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "752",
                "npsn" => "20341088",
                "nama" => "SMP NEGERI 5 SATU ATAP KALIKAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "753",
                "npsn" => "20341089",
                "nama" => "SMP NEGERI 4 SATU ATAP WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "754",
                "npsn" => "20341090",
                "nama" => "SMP NEGERI 3 SATU ATAP KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "755",
                "npsn" => "20341091",
                "nama" => "SMP NEGERI 4 SATU ATAP SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "756",
                "npsn" => "20341092",
                "nama" => "SMP NEGERI 4 SATU ATAP KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "757",
                "npsn" => "20341093",
                "nama" => "SMP NUSANTARA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "758",
                "npsn" => "20341095",
                "nama" => "SMP NEGERI 6 SATU ATAP KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "759",
                "npsn" => "20341101",
                "nama" => "SMP DARUL FALACH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "760",
                "npsn" => "20341319",
                "nama" => "SMP RIFAIYAH 01 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "761",
                "npsn" => "20341505",
                "nama" => "SMP NEGERI 4 SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "762",
                "npsn" => "20341506",
                "nama" => "SMP NEGERI 5 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "763",
                "npsn" => "20350845",
                "nama" => "SMP NEGERI 9 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "764",
                "npsn" => "20350846",
                "nama" => "SMP NEGERI 6 SATU ATAP WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "765",
                "npsn" => "20360249",
                "nama" => "SMP NEGERI 5 SATU ATAP SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "766",
                "npsn" => "20360528",
                "nama" => "SMP NEGERI 10 SATU ATAP WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "767",
                "npsn" => "20360529",
                "nama" => "SMP NEGERI 5 SATU ATAP KALIBAWANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307031"
              ],
              [
                "id" => "768",
                "npsn" => "20360530",
                "nama" => "SMP NEGERI 5 SATU ATAP SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "769",
                "npsn" => "20360531",
                "nama" => "SMP NEGERI 7 SATU ATAP KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "770",
                "npsn" => "20360532",
                "nama" => "SMP TAKHASSUS AL-QUR AN 2",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "771",
                "npsn" => "20360623",
                "nama" => "SMP NEGERI 4 KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "772",
                "npsn" => "20362777",
                "nama" => "SMP NEGERI 7 SATU ATAP KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "773",
                "npsn" => "20363627",
                "nama" => "MTSS MAARIF GARUNG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "774",
                "npsn" => "20363628",
                "nama" => "MTSS MUH. MLANDI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "775",
                "npsn" => "20363629",
                "nama" => "MTSS MUH. GARUNG BUTUH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "776",
                "npsn" => "20363630",
                "nama" => "MTSS MAARIF TIENG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "777",
                "npsn" => "20363631",
                "nama" => "MTSS MAARIF KEJAJAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "778",
                "npsn" => "20363632",
                "nama" => "MTSS AR RISALAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "779",
                "npsn" => "20363633",
                "nama" => "MTSS AS SAHRO REJOSARI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "780",
                "npsn" => "20363634",
                "nama" => "MTSS TERPADU AL-KAUTSAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "781",
                "npsn" => "20363635",
                "nama" => "MTSS MAARIF KERTEK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "782",
                "npsn" => "20363636",
                "nama" => "MTSS MAARIF SOJOKERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "783",
                "npsn" => "20363637",
                "nama" => "MTSN 2 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "784",
                "npsn" => "20363638",
                "nama" => "MTSS AL FUTUHIYYAH BUMIREJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "785",
                "npsn" => "20363639",
                "nama" => "MTSS MANBA`UL ANWAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "786",
                "npsn" => "20363640",
                "nama" => "MTSS MA`ARIF SAPURAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "787",
                "npsn" => "20363641",
                "nama" => "MTSS HS LANCAR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "788",
                "npsn" => "20363642",
                "nama" => "MTSS MAARIF KALIGOWONG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "789",
                "npsn" => "20363643",
                "nama" => "MTSS AL FATAH TIRIP",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "790",
                "npsn" => "20363645",
                "nama" => "MTSS HIDAYATUSSIBYAN WADASLINTANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "791",
                "npsn" => "20363646",
                "nama" => "MTSS MAARIF GONDANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "792",
                "npsn" => "20363647",
                "nama" => "MTSS AL GHOZALI SIWATU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "793",
                "npsn" => "20363648",
                "nama" => "MTSN 1 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "794",
                "npsn" => "69725615",
                "nama" => "MTSS MAARIF KEPIL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "795",
                "npsn" => "69725616",
                "nama" => "MTSS MAARIF KALIWIRO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "796",
                "npsn" => "69725617",
                "nama" => "MTSS MAARIF SUKOHARJO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "797",
                "npsn" => "69725618",
                "nama" => "MTSS MAARIF BAKALAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "798",
                "npsn" => "69725619",
                "nama" => "MTSS MAARIF SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "799",
                "npsn" => "69725799",
                "nama" => "MTSS MAARIF NGALIAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "800",
                "npsn" => "69726360",
                "nama" => "MTSS SA AL HIKAM CENDEKIA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "801",
                "npsn" => "69774560",
                "nama" => "SMPS ALAWIYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307070"
              ],
              [
                "id" => "802",
                "npsn" => "69788337",
                "nama" => "MTsS AN-NUUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "803",
                "npsn" => "69822426",
                "nama" => "MTSS Muhammadiyah Bener",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "804",
                "npsn" => "69856671",
                "nama" => "SMP NEGERI 4 WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_01",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "805",
                "npsn" => "69888913",
                "nama" => "MTsS As Shofa",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "806",
                "npsn" => "69895564",
                "nama" => "SMP AL-MADINA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "807",
                "npsn" => "69899426",
                "nama" => "SMPIT INSAN MULIA WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "808",
                "npsn" => "69918284",
                "nama" => "SMP TAKHASSUS AL-QURAN AN NIDA SELOMERTO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "809",
                "npsn" => "69928149",
                "nama" => "MTsSJALALUDDIN KUMEJING",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307010"
              ],
              [
                "id" => "810",
                "npsn" => "69928151",
                "nama" => "MTsSNU UNGGULAN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "811",
                "npsn" => "69928152",
                "nama" => "MTsS ASWAJA TERPADU",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "812",
                "npsn" => "69928155",
                "nama" => "MTsSNURUL CHUSNA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "813",
                "npsn" => "69928165",
                "nama" => "MTsSMA`ARIF AL FIKRI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307051"
              ],
              [
                "id" => "814",
                "npsn" => "69930689",
                "nama" => "SMP TAKHASSUS AL-QURAN SIROJUS SYUHADA",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "815",
                "npsn" => "69955967",
                "nama" => "MTSS Ma arif Ar Ridho",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "816",
                "npsn" => "69961599",
                "nama" => "SMP ALFA ALI MASYKUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "817",
                "npsn" => "69962891",
                "nama" => "SMP NU 1 WATUMALANG",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ],
              [
                "id" => "818",
                "npsn" => "69977315",
                "nama" => "MTS BERBAUR",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "819",
                "npsn" => "69978382",
                "nama" => "SMP PELITA AL QUR`AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307110"
              ],
              [
                "id" => "820",
                "npsn" => "69983098",
                "nama" => "MTSS AL MAKSUM WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "821",
                "npsn" => "69983347",
                "nama" => "MTSS TAKHASSUS AL-QUR`AN WONOSOBO",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307060"
              ],
              [
                "id" => "822",
                "npsn" => "70008284",
                "nama" => "SMP TAKHASSUS AL QURAN AL FATHONIYYAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "823",
                "npsn" => "70009009",
                "nama" => "MTSS HIDAYAH AL QUR'AN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "824",
                "npsn" => "70009011",
                "nama" => "MTSS AL MAHFUDZ",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307030"
              ],
              [
                "id" => "825",
                "npsn" => "70009019",
                "nama" => "MTSS AL MUTTAQIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "826",
                "npsn" => "70009020",
                "nama" => "MTSS AN NAWAWI SARWODADI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307020"
              ],
              [
                "id" => "827",
                "npsn" => "70009053",
                "nama" => "MTSS TAKHASSUS AL-QUR'AN AL MUHIBBIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "828",
                "npsn" => "70009106",
                "nama" => "MTSS MULYO ALMUBAROK",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307090"
              ],
              [
                "id" => "829",
                "npsn" => "70011625",
                "nama" => "SMP DARUSSALAM ISLAMIC BOARDING SCHOOL",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307040"
              ],
              [
                "id" => "830",
                "npsn" => "70026086",
                "nama" => "MTs AL-BIRUNI",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307080"
              ],
              [
                "id" => "831",
                "npsn" => "70027702",
                "nama" => "MTs Raudlotul Falah",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307050"
              ],
              [
                "id" => "832",
                "npsn" => "70028317",
                "nama" => "SMP AL-MUNAWAROH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307130"
              ],
              [
                "id" => "833",
                "npsn" => "70030618",
                "nama" => "SMP AL-ISLAH",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_06",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307120"
              ],
              [
                "id" => "834",
                "npsn" => "70033270",
                "nama" => "MTs DARUTTHOLIBIN",
                "jenjang" => "JENJANG_PENDIDIKAN_TP_07",
                "status_sekolah" => "STATUS_SEKOLAH_TP_02",
                "kecamatan" => "3307100"
              ]
            
            
        ];

        foreach ($data as $datum) {
            Sekolah::create($datum);
        }
    }
}
