<nav>
    <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'aktif' : '' }}">Beranda</a>
    <a href="{{ route('jurusan.index') }}" class="{{ request()->routeIs('jurusan.*') ? 'aktif' : '' }}">Jurusan</a>
    <a href="{{ route('prodi.index') }}" class="{{ request()->routeIs('prodi.*') ? 'aktif' : '' }}">Prodi</a>
    <a href="{{ route('dosen.index') }}" class="{{ request()->routeIs('dosen.*') ? 'aktif' : '' }}">Dosen</a>
    <a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.*') ? 'aktif' : '' }}">Mahasiswa</a>
    <a href="{{ route('matakuliah.index') }}" class="{{ request()->routeIs('matakuliah.*') ? 'aktif' : '' }}">Mata Kuliah</a>
</nav>
