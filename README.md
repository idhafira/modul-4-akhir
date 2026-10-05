# Tugas Modul 4 - Praktikum Laravel

## Identitas
- **Nama:** [Isi Nama Kamu]
- **NIM:** [Isi NIM Kamu]

---

## Cara Menjalankan Project

1. **Clone Repositori / Ekstrak Zip**
   ```bash
   git clone https://github.com/idhafira/modul-4-akhir.git
   cd modul-4-akhir
   ```

2. **Install Dependensi Composer & Node**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment (`.env`)**
   Duplikat file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Atur koneksi database pada file `.env` sesuai pengaturan lokal kamu (misal: `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi & Seeder (jika ada)**
   ```bash
   php artisan migrate
   ```

6. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
   Buka browser di `http://127.0.0.1:8000`.

---

## Daftar Route (`php artisan route:list`)
```text
+-----------+-----------------------+-----------------------+---------------------------+
| Method    | URI                   | Name                  | Action                    |
+-----------+-----------------------+-----------------------+---------------------------+
| GET|HEAD  | /                     | beranda               | routes/web.php:15         |
| POST      | _boost/browser-logs   | boost.browser-logs    | BoostServiceProvider      |
| GET|HEAD  | dosen                 | dosen.index           | DosenController@index     |
| GET|HEAD  | dosen/{dosen}         | dosen.show            | DosenController@show      |
| GET|HEAD  | jurusan               | jurusan.index         | JurusanController@index   |
| GET|HEAD  | jurusan/{jurusan}     | jurusan.show          | JurusanController@show    |
| GET|HEAD  | mahasiswa             | mahasiswa.index       | MahasiswaController@index |
| GET|HEAD  | mahasiswa/{mahasiswa} | mahasiswa.show        | MahasiswaController@show  |
| GET|HEAD  | matakuliah            | matakuliah.index      | MatakuliahController@index|
| GET|HEAD  | matakuliah/{matakuliah}| matakuliah.show       | MatakuliahController@show |
| GET|HEAD  | prodi                 | prodi.index           | ProdiController@index     |
| GET|HEAD  | prodi/{prodi}         | prodi.show            | ProdiController@show      |
| GET|HEAD  | storage/{path}        | storage.local         | FilesystemServiceProvider |
| PUT       | storage/{path}        | storage.local.upload  | FilesystemServiceProvider |
| GET|HEAD  | up                    | -                     | ApplicationBuilder        |
| GET|HEAD  | {fallbackPlaceholder} | -                     | routes/web.php:34         |
+-----------+-----------------------+-----------------------+---------------------------+
```
---