<?php

use App\Http\Livewire\Pages\Laporan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Ats\AtsPage;
use App\Http\Controllers\HelperController;
use App\Http\Livewire\Pages\Ats\DaftarAts;
use App\Http\Livewire\Pages\Ats\DetailAts;
use App\Http\Livewire\Pages\User\UserPage;
use App\Http\Livewire\Pages\User\DaftarUser;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Pages\LaporanKecamatan;
use App\Http\Livewire\Pages\Master\Sekolah\SekolahPage;
use App\Http\Livewire\Pages\Master\Sekolah\DaftarSekolah;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::get('show-picture', [HelperController::class, 'showPicture'])->name('helper.show-picture');

Route::group(['middleware' => ['role:admin']], function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
        Route::get('data-ats/{id?}', AtsPage::class)->name('data-ats');
        Route::get('data-ats-index', DaftarAts::class)->name('data-ats.index');
        Route::get('user/{id?}', UserPage::class)->name('user');
        Route::get('user-index', DaftarUser::class)->name('user.index');
        Route::get('laporan', Laporan::class)->name('laporan.index');
        Route::get('detail-ats', DetailAts::class)->name('detail-ats.index');
        Route::get('laporan/kecamatan/{id}', LaporanKecamatan::class)->name('laporan.kecamatan.index');
        Route::get('/getUser', function () {
            return response()->json(['userId' => auth()->user()->kecamatan]);
        });
        Route::get('/cetak', [DashboardController::class, 'cetak'])->name('cetak');
        Route::get('sekolah/{id?}', SekolahPage::class)->name('data-sekolah');
        Route::get('sekolah-index', DaftarSekolah::class)->name('sekolah.index');
        Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    });
});