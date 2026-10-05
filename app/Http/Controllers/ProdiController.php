<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with('jurusan')
            ->withCount(['mahasiswas', 'dosens', 'matakuliahs'])
            ->orderBy('kode')->get();

        return view('prodi.index', compact('prodi'));
    }

    public function show(Prodi $prodi)
    {
        $prodi->load(['jurusan', 'dosens', 'matakuliahs.dosen', 'mahasiswas']);

        return view('prodi.show', compact('prodi'));
    }
}
