<?php

namespace App\Http\Livewire\Pages\Ats;

use App\Models\ComCode;
use App\Models\ComRegion;
use Livewire\Component;

class AtsPage extends Component
{
    public $usia = 0;
    public $pendidikanTpList;
    public $listKecamatan;
    public $listKelurahan;
    public $listAtsSt;
    public $listAlasanTp;
    public $listMinatSekolahSt;
    public $listSekolahTp;
    public $listDisabilitasSt;
    public $listJenisDisabilitasTp;
    public $dataAts = [
        "nama" => "",
        "nik" => "",
        "tempat_lahir" => "",
        "tanggal_lahir" => "",
        "nama_kk" => "",
        "nik_kk" => "",
        "tempat_lahir_kk" => "",
        "tanggal_lahir_kk" => "",
        "pendidikan_tp" => "",
        "kelas" => "",
        "creator_id" => ""
    ];

    public $atsAddres= [
        "region_kec" => "",
        "region_kel" => "",
        "dusun" => "",
        "rw" => "",
        "rt" => "",
        "creator_id" => ""
    ];

    public $atsPendataans = [
        "ats_st" => "",
        "alasan_tp" => "",
        "minat_sekolah_st" => "",
        "sekolah_tp" => "",
        "nama_sekolah" => "",
        "kelas" => "",
        "disabilitas_st" => "",
        "jenis_disabilitas_tp" => "",
        "note" => "",
        "creator_id" => ""
    ];

    public function updatedDataAtsTanggalLahir()
    {
        $this->usia = date_diff(date_create($this->dataAts['tanggal_lahir']), date_create('now'))->y;
    }

    public function updatedAtsAddresRegionKec()
    {
        $this->listKelurahan = ComRegion::where('region_root', $this->atsAddres['region_kec'])->get();
    }
    public function updatedAtsAddresRw()
    {
        if( $this->atsAddres['rw']){
        $this->atsAddres['rw'] = str_pad($this->atsAddres['rw'],3,"0", STR_PAD_LEFT);
        }
    }
    public function updatedAtsAddresRt()
    {
        if( $this->atsAddres['rt']){
            $this->atsAddres['rt'] = str_pad($this->atsAddres['rt'],3,"0", STR_PAD_LEFT);
        }
    }

    public function simpanData()
    {
        # code...
    }


    public function mount()
    {
        $this->listKecamatan = ComRegion::where('region_level', 3)->get();
        $this->pendidikanTpList = ComCode::where('code_group', "PENDIDIKAN_TP")->get();
        $this->listAtsSt = ComCode::where('code_group', "ATS_ST")->get();
        $this->listAlasanTp = ComCode::where('code_group', "ALASAN_TP")->get();
        $this->listMinatSekolahSt = ComCode::where('code_group', "MINAT_SEKOLAH_ST")->get();
        $this->listSekolahTp = ComCode::where('code_group', "sekolah_tp")->get();
        $this->listDisabilitasSt = ComCode::where('code_group', "disabilitas_st")->get();
        $this->listJenisDisabilitasTp = ComCode::where('code_group', "jenis_disabilitas_tp")->get();

    }
    public function render()
    {
        return view('livewire.pages.ats.ats-page');
    }
}
