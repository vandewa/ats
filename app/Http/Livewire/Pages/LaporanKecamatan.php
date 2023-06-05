<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use DB;
class LaporanKecamatan extends Component
{
    public $report;
    public $sumber;
 
    protected $queryString = ['sumber'];
    public function mount($id)
    {
        $this->report = DB::table('ats')->select(DB::raw("DISTINCT com_regions.region_nm, sumber, count(ats.id) as jumlah, sum(case when status = true  then 1 else 0 end ) as tervalidasi,
        sum(case when minat_sekolah_st = 'MINAT_SEKOLAH_ST_01'  then 1 else 0 end ) as minat_sekolah"))
        ->leftJoin('ats_addresses', 'ats_addresses.ats_id', 'ats.id')
        ->leftJoin('com_regions', 'com_regions.region_cd', 'ats_addresses.region_kel')
        ->leftJoin('ats_pendataans', 'ats_pendataans.ats_id', 'ats.id')
        ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
        ->where('sumber', '=', null)
        ->where('region_kec', $id)
        ->where('sumber', $this->sumber)
        ->groupBy('ats.sumber')
        ->groupBy('com_regions.region_nm')
        ->orderBy('com_regions.region_nm', 'asc')
        ->get();
    }
    public function render()
    {
        return view('livewire.pages.laporan-kecamatan');
    }
}
