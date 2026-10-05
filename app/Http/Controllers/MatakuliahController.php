<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with(['prodi', 'dosen'])->orderBy('kode')->get();

        return view('matakuliah.index', compact('matakuliah'));
    }

    public function show(Matakuliah $matakuliah)
    {
        $matakuliah->load(['prodi.jurusan', 'dosen']);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
