# Proyek Akhir – Sistem Informasi Akademik (Laravel 13)

- Nama : MUHAMMAD IDHAFI RAMADHAN
- NIM  : C050425010

## Modul Data (5 modul, masing-masing Route Resource index & show)
Jurusan, Prodi, Dosen, Mahasiswa, Mata Kuliah

## Relasi Antar Tabel
```
jurusans  1 ──< prodis
prodis    1 ──< dosens
prodis    1 ──< mahasiswas      dosens 1 ──< mahasiswas (dosen_wali_id)
prodis    1 ──< matakuliahs     dosens 1 ──< matakuliahs (dosen_id)
```

## Fitur
- Halaman daftar & detail setiap modul, saling terhubung dengan named route `route()`
- Satu master layout (`layouts/app.blade.php`) + partial navbar + halaman beranda
- `@forelse`, `$loop`, `@if`, `@switch`, `@isset` pada view
- Seeder data dummy untuk seluruh tabel

## Cara Menjalankan
1. `composer install`
2. `cp .env.example .env` lalu `php artisan key:generate`
3. Atur database di `.env` (boleh SQLite bawaan)
4. `php artisan migrate:fresh --seed`
5. `php artisan serve` lalu buka http://127.0.0.1:8000

## Daftar Route
(Tempel hasil `php artisan route:list` di sini)
