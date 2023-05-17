<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use DB;

class Laporan extends Component
{

    public $report;
    public function mount()
    {
        $this->report = DB::table('ats')->select(DB::raw("region_kec, com_regions.region_nm, count(ats.id) as jumlah, sum(case when status = true  then 1 else 0 end ) as tervalidasi"))
        ->leftJoin('ats_addresses', 'ats_addresses.ats_id', 'ats.id')
        ->leftJoin('com_regions', 'com_regions.region_cd', 'ats_addresses.region_kec')
        ->groupBy('region_kec')
        ->groupBy('com_regions.region_nm')->get();
    }
    public function render()
    {
       
        return view('livewire.pages.laporan');
    }
}
