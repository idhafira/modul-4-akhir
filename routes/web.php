<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProdiController;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'total' => [
            'Jurusan'     => ['jumlah' => Jurusan::count(),     'rute' => 'jurusan.index'],
            'Prodi'       => ['jumlah' => Prodi::count(),       'rute' => 'prodi.index'],
            'Dosen'       => ['jumlah' => Dosen::count(),       'rute' => 'dosen.index'],
            'Mahasiswa'   => ['jumlah' => Mahasiswa::count(),   'rute' => 'mahasiswa.index'],
            'Mata Kuliah' => ['jumlah' => Matakuliah::count(),  'rute' => 'matakuliah.index'],
        ],
    ]);
})->name('beranda');

// Route Resource: 5 modul data (index & show) dengan named route otomatis
Route::resource('jurusan', JurusanController::class)->only(['index', 'show']);
Route::resource('prodi', ProdiController::class)->only(['index', 'show']);
Route::resource('dosen', DosenController::class)->only(['index', 'show']);
Route::resource('mahasiswa', MahasiswaController::class)->only(['index', 'show']);
Route::resource('matakuliah', MatakuliahController::class)->only(['index', 'show']);

Route::fallback(function () {
    return response('Halaman yang Anda cari tidak ditemukan.', 404);
});
