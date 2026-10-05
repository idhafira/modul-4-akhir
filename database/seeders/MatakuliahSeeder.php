<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // [kode prodi, kode MK, nama, SKS, semester, NIDN dosen pengampu]
            ['IF', 'IF101', 'Algoritma dan Pemrograman',     3, 1, '0403038803'],
            ['IF', 'IF201', 'Basis Data',                    4, 3, '0402028202'],
            ['IF', 'IF202', 'Pemrograman Web',               4, 4, '0401018501'],
            ['IF', 'IF301', 'Rekayasa Perangkat Lunak',      3, 5, '0402028202'],
            ['IF', 'IF401', 'Kecerdasan Buatan',             3, 7, '0401018501'],
            ['SI', 'SI101', 'Pengantar Sistem Informasi',    2, 1, '0405058605'],
            ['SI', 'SI201', 'Analisis dan Perancangan Sistem', 3, 3, '0406068706'],
            ['SI', 'SI301', 'Manajemen Proyek TI',           3, 5, '0404048004'],
            ['SI', 'SI401', 'Audit Sistem Informasi',        3, 7, '0404048004'],
            ['MI', 'MI101', 'Dasar Pemrograman',             3, 1, '0408088908'],
            ['MI', 'MI201', 'Jaringan Komputer',             4, 3, '0407077807'],
            ['TE', 'TE101', 'Rangkaian Listrik',             4, 1, '0409098109'],
            ['TE', 'TE201', 'Elektronika Dasar',             3, 3, '0410108410'],
            ['TT', 'TT201', 'Sistem Komunikasi',             3, 3, '0411118511'],
            ['AB', 'AB101', 'Pengantar Bisnis',              2, 1, '0413138813'],
            ['AB', 'AB201', 'Manajemen Pemasaran',           3, 3, '0412128312'],
            ['AB', 'AB301', 'Kewirausahaan',                 3, 5, '0412128312'],
        ];

        foreach ($data as [$kodeProdi, $kode, $nama, $sks, $semester, $nidn]) {
            Matakuliah::create([
                'prodi_id' => Prodi::where('kode', $kodeProdi)->value('id'),
                'dosen_id' => Dosen::where('nidn', $nidn)->value('id'),
                'kode'     => $kode,
                'nama'     => $nama,
                'sks'      => $sks,
                'semester' => $semester,
            ]);
        }
    }
}
