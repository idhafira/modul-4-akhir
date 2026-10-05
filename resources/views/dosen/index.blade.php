@extends('layouts.app')

@section('judul', 'Daftar Dosen')

@section('konten')
    <h1>Daftar Dosen</h1>
    <p>Total: {{ $dosen->count() }} dosen</p>

    <table>
        <thead>
            <tr><th>No</th><th>NIDN</th><th>Nama</th><th>Prodi</th><th>Jabatan</th><th>MK Diampu</th><th>Mhs Wali</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($dosen as $d)
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nidn }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->prodi->nama }}</td>
                    <td>
                        @switch($d->jabatan)
                            @case('Guru Besar')
                                <span class="badge badge-warn">Guru Besar</span>
                                @break
                            @case('Lektor Kepala')
                                <span class="badge badge-info">Lektor Kepala</span>
                                @break
                            @default
                                <span class="badge">{{ $d->jabatan }}</span>
                        @endswitch
                    </td>
                    <td>{{ $d->matakuliahs_count }}</td>
                    <td>{{ $d->mahasiswa_wali_count }}</td>
                    <td><a href="{{ route('dosen.show', $d->id) }}">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="8">Belum ada data dosen.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
