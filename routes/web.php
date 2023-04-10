<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Pages\Ats\AtsPage;
use App\Http\Livewire\Pages\Ats\DaftarAts;
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
    return view('welcome');
});

Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('data-ats', AtsPage::class)->name('data-ats');
    Route::get('data-ats-index', DaftarAts::class)->name('data-ats.index');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

});
