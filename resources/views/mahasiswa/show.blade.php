@extends('layouts.app')

@section('judul', 'Detail Mahasiswa - ' . $mahasiswa->nama)

@section('konten')
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Program Studi:</strong> <a href="{{ route('prodi.show', $mahasiswa->prodi_id) }}">{{ $mahasiswa->prodi->nama }}</a></p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa->prodi->jurusan->nama }}</p>
    <p><strong>Angkatan:</strong> {{ $mahasiswa->angkatan }}</p>
    <p><strong>Semester:</strong> {{ $mahasiswa->semester }}</p>
    <p><strong>Status:</strong>
        @if ($mahasiswa->semester >= 7)
            Tingkat Akhir
        @elseif ($mahasiswa->semester >= 4)
            Tingkat Menengah
        @else
            Tingkat Awal
        @endif
    </p>
    <p><strong>Dosen Wali:</strong>
        @isset($mahasiswa->dosenWali)
            <a href="{{ route('dosen.show', $mahasiswa->dosen_wali_id) }}">{{ $mahasiswa->dosenWali->nama }}</a>
        @else
            Belum ditentukan
        @endisset
    </p>
    <a href="{{ route('mahasiswa.index') }}">&laquo; Kembali ke Daftar</a>
@endsection
