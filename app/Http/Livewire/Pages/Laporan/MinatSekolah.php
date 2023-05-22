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
        ->leftJoin('ats_addresses', 'ats_addresses.ats_id', 'ats.id')
        ->leftJoin('com_regions', 'com_regions.region_cd', 'ats_addresses.region_kec')
        ->leftJoin('ats_pendataans', 'ats_pendataans.ats_id', 'ats.id')
        ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
        ->groupBy('region_kec')
        ->groupBy('ats.sumber')
        ->groupBy('com_regions.region_nm')
        ->orderBy('com_regions.region_nm', 'asc')->get();
        return view('livewire.pages.laporan.minat-sekolah');
    }
}
