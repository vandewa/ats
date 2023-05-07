<?php

namespace App\Http\Livewire\Pages\Ats;

use App\Models\ComRegion;
use Livewire\Component;

class DaftarAts extends Component
{
    public $kecamatanList;
    public $kelurahanList;
    public $region_kec;
    public $region_kel;
    public $nik;
    public $status;
    public function mount()
    {
        $this->kecamatanList = ComRegion::where('region_level', 3)->get();
    }

    public function updatedRegionKec()
    {
        $this->kelurahanList = ComRegion::where('region_root', $this->region_kec)->get();
    }
    public function render()
    {
        return view('livewire.pages.ats.daftar-ats');
    }

    public function updated()
    {
        $data = ['region_kec' => $this->region_kec, 
        'region_kel' => $this->region_kel, 
        'status' => $this->status,
        'nik' => $this->nik
        ];
        $this->emitTo('pages.ats.list-data-ats', 'pencarian', $data);

    }
}
