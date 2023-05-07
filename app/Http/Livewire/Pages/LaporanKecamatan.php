<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use DB;
class LaporanKecamatan extends Component
{
    public $report;
    public function mount($id)
    {
        $this->report = DB::table('ats')->select(DB::raw("com_regions.region_nm, count(ats.id) as jumlah, count(status) as tervalidasi"))
        ->leftJoin('ats_addresses', 'ats_addresses.ats_id', 'ats.id')
        ->leftJoin('com_regions', 'com_regions.region_cd', 'ats_addresses.region_kel')
        ->where('region_kec', $id)
        ->groupBy('com_regions.region_nm')
        ->get();
    }
    public function render()
    {
        return view('livewire.pages.laporan-kecamatan');
    }
}
