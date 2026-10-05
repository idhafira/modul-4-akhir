@extends('layouts.app')

@section('judul', 'Detail Jurusan - ' . $jurusan->nama)

@section('konten')
    <h1>Detail Jurusan</h1>
    <p><strong>Kode:</strong> {{ $jurusan->kode }}</p>
    <p><strong>Nama:</strong> {{ $jurusan->nama }}</p>

    <h3>Program Studi di Jurusan Ini</h3>
    <table>
        <thead><tr><th>No</th><th>Kode</th><th>Nama Prodi</th><th>Jenjang</th><th>Aksi</th></tr></thead>
        <tbody>
            @forelse ($jurusan->prodis as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jenjang }}</td>
                    <td><a href="{{ route('prodi.show', $p->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="5">Belum ada prodi.</td></tr>
            @endforelse
        </tbody>
    </table>

    <p><a href="{{ route('jurusan.index') }}">&laquo; Kembali ke Daftar</a></p>
@endsection
