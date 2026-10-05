@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah - ' . $matakuliah->nama)

@section('konten')
    <h1>Detail Mata Kuliah</h1>
    <p><strong>Kode:</strong> {{ $matakuliah->kode }}</p>
    <p><strong>Nama:</strong> {{ $matakuliah->nama }}</p>
    <p><strong>SKS:</strong> {{ $matakuliah->sks }}
        @if ($matakuliah->sks > 3) <span class="badge badge-warn">SKS Besar</span> @endif
    </p>
    <p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>
    <p><strong>Prodi:</strong> <a href="{{ route('prodi.show', $matakuliah->prodi_id) }}">{{ $matakuliah->prodi->nama }}</a></p>
    <p><strong>Dosen Pengampu:</strong>
        @isset($matakuliah->dosen)
            <a href="{{ route('dosen.show', $matakuliah->dosen_id) }}">{{ $matakuliah->dosen->nama }}</a>
        @else
            Belum ditentukan
        @endisset
    </p>
    <a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar</a>
@endsection
