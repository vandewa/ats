<?php

namespace App\Http\Livewire\Pages\Laporan;

use Livewire\Component;
use DB;
use App\Models\Ats;
use Livewire\WithPagination;

class MinatSekolah extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    
    public function render()
    {
        $a = Ats::with('pendataan', 'alamatnya')->paginate(20);
        return view('livewire.pages.laporan.minat-sekolah',[
            'anak' => $a
        ]);
    }
}
