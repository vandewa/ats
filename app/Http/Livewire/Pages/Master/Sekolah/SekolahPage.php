<?php

namespace App\Http\Livewire\Pages\Master\Sekolah;

use App\Models\ComCode;
use Livewire\Component;
use App\Models\Sekolah;
use App\Models\ComRegion;

class SekolahPage extends Component
{
    public $idnya;
    public $listKecamatan;
    public $listSekolahTp;
    public $listJenjangSekolah;
    public $sekolah = [
        "nama" => "",
        "npsn" => "",
        "jenjang" => "",
        "status_sekolah" => "",
        "kecamatan" => ""
    ];

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            Sekolah::create($this->sekolah);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('sekolah.index'));
        }
    }

    public function patchData()
    {
        $sekolah = Sekolah::find($this->idnya);
        $sekolah->update($this->sekolah);

        $this->dispatchBrowserEvent('Update');
        redirect()->to(route('sekolah.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Sekolah::find($id);
            if ($data) {
                $this->sekolah = collect($data)->except(['created_at', 'updated_at'])->toArray();
            }
        }
        $this->idnya = $id;
        $this->listKecamatan = ComRegion::where('region_level', 3)->get();
        $this->listSekolahTp = ComCode::where('code_group', "sekolah_tp")->get();
        $this->listJenjangSekolah = ComCode::where('code_group', "JENJANG_PENDIDIKAN_TP")->get();
    }
    public function render()
    {
        return view('livewire.pages.master.sekolah.sekolah-page');
    }
}