<?php

namespace App\Http\Controllers;

use App\Models\Ats;
use App\Models\User;
use App\Models\AtsAddress;
use App\Models\AtsPendataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $total_data_ats = Ats::where('sumber', '!=', 'ATS 2022 NON IRISAN')->orWhere('sumber', null)->count();
        $total_user = User::count();
        $total_user_kec = User::where('kecamatan', auth()->user()->kecamatan)->count();
        $sudah_verif = Ats::where('status', 1)
            ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
            ->count();
        $blm_verif = Ats::where('status', 0)
            ->whereRaw("(sumber <> 'ATS 2022 NON IRISAN' or sumber is null)")
            ->count();
        $nama_kecamatan = User::with(['namaKecamatan'])
            ->where('id', auth()->user()->id)->first()
            ->namaKecamatan->region_nm ?? '';
        $jml_ats_kec = AtsAddress::where('region_kec', auth()->user()->kecamatan)
            ->whereHas('atsnya', function ($query) {
                $query->where('sumber', '!=', 'ATS 2022 NON IRISAN')
                    ->orWhere('sumber', null);
            })
            ->count();
        $sudah_verif_kec = Ats::where('status', true)
            ->whereHas('alamatnya', function ($query) {
                $query->where('region_kec', auth()->user()->kecamatan);
            })
            ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
            ->count();
        $blm_verif_kec = Ats::where('status', false)
            ->whereHas('alamatnya', function ($query) {
                $query->where('region_kec', auth()->user()->kecamatan);
            })
            ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
            ->count();
        
        $minat = AtsPendataan::where('minat_sekolah_st', 'MINAT_SEKOLAH_ST_01')->count();
        $tidak_minat = AtsPendataan::where('minat_sekolah_st', 'MINAT_SEKOLAH_ST_02')->count();

        $minat_pke = AtsPendataan::where('minat_sekolah_st', 'MINAT_SEKOLAH_ST_01')
        ->whereHas('atsnya', function ($query) {
            $query->where('sumber','P3KE PROVINSI');
        })->count();

        $total_pke = AtsPendataan::where('minat_sekolah_st', 'MINAT_SEKOLAH_ST_01')
        ->whereHas('atsnya', function ($query) {
            $query->where('sumber','!=','P3KE PROVINSI');
        })->count();

        // return $minat_pke;

        return view('dashboard.index', compact('total_data_ats', 'total_user', 'sudah_verif', 'blm_verif', 'nama_kecamatan', 'jml_ats_kec', 'sudah_verif_kec', 'blm_verif_kec', 'total_user_kec', 'minat', 'tidak_minat', 'minat_pke', 'total_pke'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function cetak()
    {
        return response()->download(public_path('template/FORMULIR-PERMOHONAN-BEASISWA-PENDIDIKAN.docx'))->deleteFileAfterSend(false);
    }

    public function gantiPassword(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('edit', 'oke');
    }
}