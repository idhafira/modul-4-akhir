<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // [kode jurusan, kode prodi, nama, jenjang]
            ['JTI', 'IF', 'Teknik Informatika',     'S1'],
            ['JTI', 'SI', 'Sistem Informasi',       'S1'],
            ['JTI', 'MI', 'Manajemen Informatika',  'D3'],
            ['JTE', 'TE', 'Teknik Elektro',         'S1'],
            ['JTE', 'TT', 'Teknik Telekomunikasi',  'D3'],
            ['JAB', 'AB', 'Administrasi Bisnis',    'S1'],
        ];

        foreach ($data as [$kodeJurusan, $kode, $nama, $jenjang]) {
            Prodi::create([
                'jurusan_id' => Jurusan::where('kode', $kodeJurusan)->value('id'),
                'kode'       => $kode,
                'nama'       => $nama,
                'jenjang'    => $jenjang,
            ]);
        }
    }
}
