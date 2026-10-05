@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>
    <p>Total: {{ $mahasiswa->count() }} mahasiswa</p>

    <table>
        <thead>
            <tr><th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Angkatan</th><th>Smt</th><th>Status</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mhs)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi->nama }}</td>
                    <td>{{ $mhs->angkatan }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>
                        @switch(true)
                            @case($mhs->semester <= 2)
                                <span class="badge badge-info">Mahasiswa Baru</span>
                                @break
                            @case($mhs->semester >= 7)
                                <span class="badge badge-warn">Tingkat Akhir</span>
                                @break
                            @default
                                <span class="badge badge-ok">Mahasiswa Aktif</span>
                        @endswitch
                        @if ($loop->last)
                            <small>(data terakhir)</small>
                        @endif
                    </td>
                    <td><a href="{{ route('mahasiswa.show', $mhs->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="8">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
