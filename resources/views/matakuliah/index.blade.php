@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>
    <p>Total: {{ $matakuliah->count() }} mata kuliah</p>

    <table>
        <thead>
            <tr><th>No</th><th>Kode</th><th>Nama</th><th>Prodi</th><th>SKS</th><th>Smt</th><th>Dosen Pengampu</th><th>Kategori</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($matakuliah as $mk)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode }}</td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->prodi->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->semester }}</td>
                    <td>{{ $mk->dosen->nama ?? '-' }}</td>
                    <td>
                        @if ($mk->sks > 3)
                            <span class="badge badge-warn">SKS Besar</span>
                        @else
                            <span class="badge">SKS Reguler</span>
                        @endif
                        @if ($loop->first)
                            <small>(data pertama)</small>
                        @endif
                    </td>
                    <td><a href="{{ route('matakuliah.show', $mk->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="9">Belum ada data mata kuliah.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
