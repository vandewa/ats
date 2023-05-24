<?php

namespace App\Http\Livewire\Pages\Laporan;

use Livewire\Component;
use DB;

class MinatSekolah extends Component
{
    public $report;
    public function render()
    {
        $this->report = DB::table('ats')->select(DB::raw("region_kec, sumber, com_regions.region_nm, count(ats.id) as jumlah, sum(case when status = true  then 1 else 0 end ) as tervalidasi"))
        ->join('ats_addresses', 'ats_addresses.ats_id', 'ats.id')
        ->join('com_regions', 'com_regions.region_cd', 'ats_addresses.region_kec')
        ->join('ats_pendataans', 'ats_pendataans.ats_id', 'ats.id')
        ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
        ->groupBy('region_kec')
        ->groupBy('ats.sumber')
        ->groupBy('com_regions.region_nm')
        ->orderBy('com_regions.region_nm', 'asc')->get();
        return view('livewire.pages.laporan.minat-sekolah');
    }
}
