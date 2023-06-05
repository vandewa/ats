<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Ats;

class ExportAts implements FromView
{

    public $searchNama, $searchNik, $searchMinat, $searchDisabilitas, $searchAts, $searchKecamatan, $searchDesa, $searchVerval, $searchAlasan, $verval;

    public function __construct($searchNama, $searchNik, $searchMinat, $searchDisabilitas, $searchAts, $searchKecamatan, $searchDesa, $searchVerval, $searchAlasan, $verval)
    {
        $this->searchNama = $searchNama;
         $this->searchNik = $searchNik;
         $this->searchMinat = $searchMinat;
         $this->searchDisabilitas = $searchDisabilitas;
         $this->searchAts = $searchAts;
         $this->searchKecamatan = $searchKecamatan;
         $this->searchDesa = $searchDesa;
         $this->searchVerval = $searchVerval;
         $this->searchAlasan = $searchAlasan;
         $this->verval = $verval;
        
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $ats = Ats::with(['pendataan' => function($a){
            $a->with(['disabilitas', 'alasan', 'jenisDisabilitas', 'statusAts', 'minatSekolah', 'sekolahNama', 'kelasSekolah']);
        }, 'alamatnya' => function($a) {
            $a->with('namaKelurahan', 'namaKecamatan');
        }])->where(function ($query) {
            $query->where('sumber', '!=', 'ATS 2022 NON IRISAN')
                ->orWhereNull('sumber');
        });
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
        
        $ats = $ats->get();

        return view('livewire.pages.ats.detail-ats-export', [
            'items' => $ats
        ]);
    }
}
