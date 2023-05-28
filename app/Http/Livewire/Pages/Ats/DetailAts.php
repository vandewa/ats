<?php

namespace App\Http\Livewire\Pages\Ats;

use App\Exports\ExportAts;
use App\Models\Ats;
use App\Models\ComCode;
use App\Models\ComRegion;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

use Livewire\Component;

class DetailAts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $minatSekolah, $disablitas, $atsSt, $desa, $kecamatan, $alasan;

    public $searchNama, $searchNik, $searchMinat, $searchDisabilitas, $searchAts, $searchKecamatan, $searchDesa, $searchVerval, $searchAlasan, $verval = "not";

    public function mount()
    {
        $this->minatSekolah = ComCode::where('code_group', 'MINAT_SEKOLAH_ST')->get();
        $this->atsSt = ComCode::where('code_group', 'ATS_ST')->get();
        $this->disablitas = ComCode::where('code_group', 'DISABILITAS_ST')->get();
        $this->kecamatan = ComRegion::where('region_level', 3)->get();
        $this->alasan = ComCode::where('code_group', 'ALASAN_TP')->get();
      
    }

    public function exportExcel()
    {
        $a = now();
        return Excel::download(new ExportAts( $this->searchNama, $this->searchNik, $this->searchMinat, $this->searchDisabilitas, $this->searchAts, $this->searchKecamatan, $this->searchDesa, $this->searchVerval, $this->searchAlasan, $this->verval), 'ats-'.$a.'.xlsx');
    }

    public function updatedSearchKecamatan()
    {
        $this->desa = ComRegion::where('region_root', $this->searchKecamatan)->get();
    }
    public function render()
    {
        $ats = Ats::with(['pendataan' => function($a){
            $a->with(['disabilitas', 'alasan', 'jenisDisabilitas', 'statusAts']);
        }, 'alamatnya' => function($a) {
            $a->with('namaKelurahan', 'namaKecamatan');
        }])->where('sumber', '!=', 'ATS 2022 NON IRISAN');

        if($this->verval != 'not'){
            $pencarian = $this->verval;
            if($this->verval == 'belum'){
                $pencarian = null;
            }
            $ats->where('status', $pencarian);
        } 

        if($this->searchNama){
            $ats->where('nama', 'like', "%$this->searchNama%");
        }
        if($this->searchMinat){
            $ats->whereHas('pendataan', function($a){
                $a->where('minat_sekolah_st', $this->searchMinat);
            });
        }
        if($this->searchNik){
            $ats->where('nik', 'like', "%$this->searchNik%");
        }
        if($this->searchKecamatan){
            $ats->whereHas('alamatnya', function($a){
                $a->where('region_kec', $this->searchKecamatan);
            });
        }
        if($this->searchDesa){
            $ats->whereHas('alamatnya', function($a){
                $a->where('region_kel', $this->searchDesa);
            });
        }
        if($this->searchDisabilitas){
            $ats->whereHas('pendataan', function($a){
                $a->where('disabilitas_st', $this->searchDisabilitas);
            });
        }
        if($this->searchAlasan){
            $ats->whereHas('pendataan', function($a){
                $a->where('alasan_tp', $this->searchAlasan);
            });
        }
        
        $ats = $ats->paginate(20);
        return view('livewire.pages.ats.detail-ats', [
            'ats' => $ats
        ]);
    }
}
