@extends('layouts.app')

@section('judul', 'Daftar Program Studi')

@section('konten')
    <h1>Daftar Program Studi</h1>

    <table>
        <thead>
            <tr><th>No</th><th>Kode</th><th>Nama Prodi</th><th>Jenjang</th><th>Jurusan</th><th>Dosen</th><th>Mhs</th><th>MK</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($prodi as $p)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>
                        @if ($p->jenjang === 'S1')
                            <span class="badge badge-info">S1</span>
                        @else
                            <span class="badge badge-ok">{{ $p->jenjang }}</span>
                        @endif
                    </td>
                    <td><a href="{{ route('jurusan.show', $p->jurusan_id) }}">{{ $p->jurusan->nama }}</a></td>
                    <td>{{ $p->dosens_count }}</td>
                    <td>{{ $p->mahasiswas_count }}</td>
                    <td>{{ $p->matakuliahs_count }}</td>
                    <td><a href="{{ route('prodi.show', $p->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="9">Belum ada data prodi.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
