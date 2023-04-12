<?php

namespace App\Http\Livewire\Pages\Ats;

use App\Models\Ats;
use App\Models\AtsAddress;
use App\Models\AtsPendataan;
use App\Models\ComCode;
use App\Models\ComRegion;
use Livewire\Component;

class AtsPage extends Component
{
    public $idnya;
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
    public $listTingkatSekolahTerakhir;
    public $listKawin;
    public $listJenisKelamin;
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
        "creator_id" => "",
        "npsn" => "",
        "kawin_tp" => "",
        "kk" => "",
        "jenis_kelamin_tp" => "",
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

    protected $listeners = ['sessionSuccess'];

    public function sessionSuccess()
    {
        session()->flash('success', 'Data berhasil dihapus');
    }

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
    public function updatedAtsPendataansAtsSt()
    {
        if( $this->atsPendataans['ats_st'] == "ATS_ST_02"){
            $this->atsPendataans['alasan_tp'] = "";
            $this->atsPendataans['minat_sekolah_st'] = "";
            $this->atsPendataans['nama_sekolah'] = "";
            $this->atsPendataans['kelas'] = "";
            $this->atsPendataans['disabilitas_st'] = "";
            $this->atsPendataans['note'] = "";
        }
    }

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'dataAts.nama' => 'required'
            ]);
            $ats = Ats::create($this->dataAts);

            $ats->alamatnya()->create($this->atsAddres);

            $ats->pendataan()->create($this->atsPendataans);

            $this->dispatchBrowserEvent('Success');

            redirect()->to(route('data-ats.index'));
        }
    }

    public function patchData()
    {
        Ats::find($this->idnya)->update($this->dataAts);
        AtsAddress::where('ats_id', $this->idnya)->update($this->atsAddres);
        AtsPendataan::where('ats_id', $this->idnya)->update($this->atsPendataans);
        $this->dispatchBrowserEvent('Update');

        redirect()->to(route('data-ats.index'));
    }


    public function mount($id = "")
    {
        if($id != ""){
            $data = Ats::with(['pendidikan', 'alamatnya', 'pendataan'])->find($id);
            if($data){
                $this->dataAts = collect($data)->except(['pendidikan', 'alamatnya', 'pendataan', 'created_at', 'updated_at'])->toArray();
                $this->atsAddres = collect($data->alamatnya)->except(['created_at', 'updated_at'])->toArray();
                $this->updatedAtsAddresRegionKec();
                $this->atsPendataans = collect($data->pendataan)->except(['created_at', 'updated_at'])->toArray();
            }
        }
        $this->idnya = $id;
        $this->listKecamatan = ComRegion::where('region_level', 3)->get();
        $this->pendidikanTpList = ComCode::where('code_group', "PENDIDIKAN_TP")->get();
        $this->listAtsSt = ComCode::where('code_group', "ATS_ST")->get();
        $this->listAlasanTp = ComCode::where('code_group', "ALASAN_TP")->get();
        $this->listMinatSekolahSt = ComCode::where('code_group', "MINAT_SEKOLAH_ST")->get();
        $this->listSekolahTp = ComCode::where('code_group', "sekolah_tp")->get();
        $this->listDisabilitasSt = ComCode::where('code_group', "disabilitas_st")->get();
        $this->listJenisDisabilitasTp = ComCode::where('code_group', "jenis_disabilitas_tp")->get();
        $this->listTingkatSekolahTerakhir = ComCode::where('code_group', "SEKOLAH_TERAKHIR_TP")->get();
        $this->listKawin = ComCode::where('code_group', "KAWIN_ST")->get();
        $this->listJenisKelamin = ComCode::where('code_group', "JENIS_KELAMIN_TP")->get();

    }
    public function render()
    {
        return view('livewire.pages.ats.ats-page');
    }
}
