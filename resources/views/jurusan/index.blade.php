@extends('layouts.app')

@section('judul', 'Daftar Jurusan')

@section('konten')
    <h1>Daftar Jurusan</h1>

    <table>
        <thead>
            <tr><th>No</th><th>Kode</th><th>Nama Jurusan</th><th>Jumlah Prodi</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($jurusan as $j)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->kode }}</td>
                    <td>{{ $j->nama }}</td>
                    <td>{{ $j->prodis_count }}</td>
                    <td><a href="{{ route('jurusan.show', $j->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada data jurusan.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
