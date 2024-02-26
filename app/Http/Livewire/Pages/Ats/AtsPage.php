<?php

namespace App\Http\Livewire\Pages\Ats;

use App\Models\Ats;
use App\Models\AtsAddress;
use App\Models\AtsPendataan;
use App\Models\ComCode;
use App\Models\ComRegion;
use App\Models\Sekolah;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AtsPage extends Component
{
    use WithFileUploads;
    public $tai;
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
    public $listTingkatSekolahTerakhir1;
    public $listKawin;
    public $listJenisKelamin;
    public $listNamaSekolah;
    public $path_file;
    public $currentUrl;
    public $halamanCreate = false;
    public $sekolahPilihan = "";

    public $dataAts = [
        "nama" => "",
        "nik" => "",
        "tempat_lahir" => "",
        "tanggal_lahir" => "",
        "pendidikan_tp" => "",
        "kelas" => "",
        "creator_id" => "",
        "kawin_tp" => "",
        "kk" => "",
        "jenis_kelamin_tp" => "",
        "npsn" => "",
    ];

    public $atsAddres = [
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
        "creator_id" => "",
        "ket_tidak_sekolah" => "",
        "ket_disabilitas" => ""
    ];

    protected $listeners = ['sessionSuccess'];

    public function sessionSuccess()
    {
        session()->flash('success', 'Data berhasil dihapus');
    }

    public function updatedDataAtsTanggalLahir()
    {

        // $this->usia = date_diff(date_create($this->dataAts['tanggal_lahir']), date_create('now'))->y;

        $this->usia = Carbon::parse($this->dataAts['tanggal_lahir'])->diffInYears(now());
    }

    public function updatedAtsAddresRegionKec()
    {
        $this->listKelurahan = ComRegion::where('region_root', $this->atsAddres['region_kec'])->get();
    }

    public function updatedAtsPendataansSekolahTp()
    {
        // dd('aa');
        $this->listNamaSekolah = Sekolah::with(['namaKecamatan'])->where('status_sekolah', $this->atsPendataans['sekolah_tp'])->get();

        if ($this->atsPendataans['minat_sekolah_st'] == "MINAT_SEKOLAH_ST_01") {
            $this->dispatchBrowserEvent('updateValue', ['newName' => $this->listNamaSekolah]);
        }
        // $this->listTingkatSekolahTerakhir1 = Sekolah::with(['namaKecamatan'])->where('status_sekolah', $this->atsPendataans['sekolah_tp'])->get();
    }

    public function updatedAtsPendataansNamaSekolah()
    {
        if ($this->atsPendataans["nama_sekolah"] != "") {
            $devan = Sekolah::find($this->atsPendataans["nama_sekolah"]);
            $this->listTingkatSekolahTerakhir1 = ComCode::where('code_value', $devan->jenjang)->get();
        }
    }
    public function updatedAtsPendataansMinatSekolahSt()
    {
        if ($this->atsPendataans["minat_sekolah_st"] == "MINAT_SEKOLAH_ST_02") {
            $this->atsPendataans["nama_sekolah"] = "";
            $this->atsPendataans["kelas"] = "";
            $this->atsPendataans["sekolah_tp"] = "";
        }
    }
    public function updatedAtsAddresRw()
    {
        if ($this->atsAddres['rw']) {
            $this->atsAddres['rw'] = str_pad($this->atsAddres['rw'], 3, "0", STR_PAD_LEFT);
        }
    }
    public function updatedAtsAddresRt()
    {
        if ($this->atsAddres['rt']) {
            $this->atsAddres['rt'] = str_pad($this->atsAddres['rt'], 3, "0", STR_PAD_LEFT);
        }
    }

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'dataAts.nama' => 'required',
                'dataAts.tanggal_lahir' => 'required',
            ]);

            if ($this->path_file) {
                $path = $this->path_file->store('ats/public/surat-rekomendasi', 'gcs');
            } else {
                $path = null;
            }

            $ats = Ats::create($this->dataAts + ['status' => true, 'tanggal_verval' => now()]);

            $ats->alamatnya()->create($this->atsAddres);

            $ats->pendataan()->create($this->atsPendataans + ['path_file' => $path]);

            $this->dispatchBrowserEvent('Success');

            redirect()->to(route('data-ats.index'));
        }
    }

    public function createPage()
    {
        $this->atsPendataans['ats_st'] = "ATS_ST_02";
        $this->halamanCreate = true;

    }
    public function editPage()
    {
        $this->halamanCreate = false;
    }

    public function patchData()
    {
        $this->validate([
            'dataAts.nama' => 'required'
        ]);

        if ($this->path_file) {
            $path = $this->path_file->store('ats/public/surat-rekomendasi', 'gcs');
        } else {
            $path = AtsPendataan::where('ats_id', $this->idnya)->first()->path_file;
        }

        Ats::find($this->idnya)->update($this->dataAts);
        if (!auth()->user()->hasRole(['admin'])) {
            Ats::find($this->idnya)->update([
                'status' => true,
                'tanggal_verval' => now()
            ]);
        }
        AtsAddress::where('ats_id', $this->idnya)->update($this->atsAddres);
        AtsPendataan::where('ats_id', $this->idnya)->update($this->atsPendataans);
        AtsPendataan::where('ats_id', $this->idnya)->update([
            'path_file' => $path
        ]);

        $this->dispatchBrowserEvent('Update');

        redirect()->to(route('data-ats.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Ats::with(['pendidikan', 'alamatnya', 'pendataan'])->find($id);
            if ($data) {
                $this->dataAts = collect($data)->except(['pendidikan', 'alamatnya', 'pendataan', 'created_at', 'updated_at'])->toArray();
                $this->atsAddres = collect($data->alamatnya)->except(['created_at', 'updated_at'])->toArray();
                $this->atsPendataans = collect($data->pendataan)->except(['id', 'created_at', 'updated_at'])->toArray();
                $this->updatedAtsAddresRegionKec();
                $this->updatedAtsPendataansSekolahTp();
                $this->updatedDataAtsTanggalLahir();
            }

            $this->sekolahPilihan = Sekolah::with(['namaKecamatan'])->find($data->pendataan->nama_sekolah);
            $this->listTingkatSekolahTerakhir1 = ComCode::where('code_group', "SEKOLAH_TERAKHIR_TP")->where('code_value', $this->sekolahPilihan->jenjang ?? 'asu')->get();
            $this->editPage();
        } else {
            $this->createPage();
        }

        $this->listNamaSekolah = Sekolah::with(['namaKecamatan'])->get();
        $this->idnya = $id;
        $this->listKecamatan = ComRegion::where('region_level', 3)->get();
        $this->pendidikanTpList = Sekolah::all();
        $this->listAtsSt = ComCode::where('code_group', "ATS_ST")->get();
        $this->listAlasanTp = ComCode::where('code_group', "ALASAN_TP")->get();
        $this->listMinatSekolahSt = ComCode::where('code_group', "MINAT_SEKOLAH_ST")->get();
        $this->listSekolahTp = ComCode::where('code_group', "sekolah_tp")->get();
        $this->listDisabilitasSt = ComCode::where('code_group', "disabilitas_st")->get();
        $this->listJenisDisabilitasTp = ComCode::where('code_group', "jenis_disabilitas_tp")->get();
        $this->listTingkatSekolahTerakhir = ComCode::where('code_group', "SEKOLAH_TERAKHIR_TP")->where('code_value', '!=', '')->get();

        $this->listKawin = ComCode::where('code_group', "KAWIN_ST")->get();
        $this->listJenisKelamin = ComCode::where('code_group', "JENIS_KELAMIN_TP")->get();

        // dd($this->atsPendataans);
    }
    public function render()
    {
        return view('livewire.pages.ats.ats-page');
    }
}