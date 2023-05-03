<?php

namespace App\Http\Controllers;

use App\Models\Ats;
use App\Models\AtsAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $sudah_verif = Ats::where('status', true)
            ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
            ->orWhere('sumber', null)
            ->count();
        $blm_verif = Ats::where('status', false)
            ->where('sumber', '!=', 'ATS 2022 NON IRISAN')
            ->orWhere('sumber', null)
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

        return view('dashboard.index', compact('total_data_ats', 'total_user', 'sudah_verif', 'blm_verif', 'nama_kecamatan', 'jml_ats_kec', 'sudah_verif_kec', 'blm_verif_kec', 'total_user_kec'));
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
}