@extends('layouts.app')

@section('judul', 'Detail Dosen - ' . $dosen->nama)

@section('konten')
    <h1>Detail Dosen</h1>
    <p><strong>NIDN:</strong> {{ $dosen->nidn }}</p>
    <p><strong>Nama:</strong> {{ $dosen->nama }}</p>
    <p><strong>Email:</strong> {{ $dosen->email }}</p>
    <p><strong>Jabatan:</strong> {{ $dosen->jabatan }}</p>
    <p><strong>Prodi:</strong> <a href="{{ route('prodi.show', $dosen->prodi_id) }}">{{ $dosen->prodi->nama }}</a>
        ({{ $dosen->prodi->jurusan->nama }})</p>

    <h3>Mata Kuliah yang Diampu</h3>
    <ul>
        @forelse ($dosen->matakuliahs as $mk)
            <li><a href="{{ route('matakuliah.show', $mk->id) }}">{{ $mk->kode }} &ndash; {{ $mk->nama }}</a> ({{ $mk->sks }} SKS)</li>
        @empty
            <li>Belum mengampu mata kuliah.</li>
        @endforelse
    </ul>

    <h3>Mahasiswa Bimbingan Wali</h3>
    <ul>
        @forelse ($dosen->mahasiswaWali as $m)
            <li><a href="{{ route('mahasiswa.show', $m->id) }}">{{ $m->nim }} &ndash; {{ $m->nama }}</a></li>
        @empty
            <li>Belum ada mahasiswa wali.</li>
        @endforelse
    </ul>

    <p><a href="{{ route('dosen.index') }}">&laquo; Kembali ke Daftar</a></p>
@endsection
