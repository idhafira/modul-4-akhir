@extends('layouts.app')

@section('judul', 'Detail Prodi - ' . $prodi->nama)

@section('konten')
    <h1>{{ $prodi->jenjang }} {{ $prodi->nama }}</h1>
    <p><strong>Kode:</strong> {{ $prodi->kode }}</p>
    <p><strong>Jurusan:</strong> <a href="{{ route('jurusan.show', $prodi->jurusan_id) }}">{{ $prodi->jurusan->nama }}</a></p>

    <h3>Dosen ({{ $prodi->dosens->count() }})</h3>
    <ul>
        @forelse ($prodi->dosens as $d)
            <li><a href="{{ route('dosen.show', $d->id) }}">{{ $d->nama }}</a> &ndash; {{ $d->jabatan }}</li>
        @empty
            <li>Belum ada dosen.</li>
        @endforelse
    </ul>

    <h3>Mata Kuliah ({{ $prodi->matakuliahs->count() }})</h3>
    <table>
        <thead><tr><th>Kode</th><th>Nama</th><th>SKS</th><th>Smt</th><th>Pengampu</th></tr></thead>
        <tbody>
            @forelse ($prodi->matakuliahs as $mk)
                <tr>
                    <td><a href="{{ route('matakuliah.show', $mk->id) }}">{{ $mk->kode }}</a></td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->semester }}</td>
                    <td>{{ $mk->dosen->nama ?? '-' }}</td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada mata kuliah.</td></tr>
            @endforelse
        </tbody>
    </table>

    <h3>Mahasiswa ({{ $prodi->mahasiswas->count() }})</h3>
    <ul>
        @forelse ($prodi->mahasiswas as $m)
            <li><a href="{{ route('mahasiswa.show', $m->id) }}">{{ $m->nim }} &ndash; {{ $m->nama }}</a> (semester {{ $m->semester }})</li>
        @empty
            <li>Belum ada mahasiswa.</li>
        @endforelse
    </ul>

    <p><a href="{{ route('prodi.index') }}">&laquo; Kembali ke Daftar</a></p>
@endsection
