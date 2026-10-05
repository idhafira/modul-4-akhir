@extends('layouts.app')

@section('judul', 'Beranda')

@section('konten')
    <h1>Beranda</h1>
    <p>Ringkasan data akademik:</p>

    <div class="cards">
        @foreach ($total as $label => $item)
            <a class="card" href="{{ route($item['rute']) }}">
                <strong>{{ $item['jumlah'] }}</strong>
                {{ $label }}
            </a>
        @endforeach
    </div>
@endsection
