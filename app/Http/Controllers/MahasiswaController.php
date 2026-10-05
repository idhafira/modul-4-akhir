<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('prodi')->orderBy('nim')->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load(['prodi.jurusan', 'dosenWali']);

        return view('mahasiswa.show', compact('mahasiswa'));
    }
}
