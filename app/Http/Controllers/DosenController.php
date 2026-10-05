<?php

namespace App\Http\Controllers;

use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::with('prodi')->withCount(['matakuliahs', 'mahasiswaWali'])
            ->orderBy('nama')->get();

        return view('dosen.index', compact('dosen'));
    }

    public function show(Dosen $dosen)
    {
        $dosen->load(['prodi.jurusan', 'matakuliahs', 'mahasiswaWali']);

        return view('dosen.show', compact('dosen'));
    }
}
