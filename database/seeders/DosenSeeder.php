<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // [kode prodi, NIDN, nama, email, jabatan]
            ['IF', '0401018501', 'Dr. Hendra Wijaya, M.Kom.',      'hendra.wijaya@kampus.ac.id',   'Lektor Kepala'],
            ['IF', '0402028202', 'Rina Marlina, M.T.',             'rina.marlina@kampus.ac.id',    'Lektor'],
            ['IF', '0403038803', 'Agus Setiawan, M.Cs.',           'agus.setiawan@kampus.ac.id',   'Asisten Ahli'],
            ['SI', '0404048004', 'Prof. Dr. Siti Nurhaliza, M.Kom.', 'siti.nurhaliza@kampus.ac.id', 'Guru Besar'],
            ['SI', '0405058605', 'Dedi Kurniawan, M.M.S.I.',       'dedi.kurniawan@kampus.ac.id',  'Lektor'],
            ['SI', '0406068706', 'Maya Anggraini, M.Kom.',         'maya.anggraini@kampus.ac.id',  'Asisten Ahli'],
            ['MI', '0407077807', 'Fajar Nugroho, M.Kom.',          'fajar.nugroho@kampus.ac.id',   'Lektor'],
            ['MI', '0408088908', 'Lina Oktaviani, S.Kom., M.Cs.',  'lina.oktaviani@kampus.ac.id',  'Asisten Ahli'],
            ['TE', '0409098109', 'Dr. Bambang Susilo, M.T.',       'bambang.susilo@kampus.ac.id',  'Lektor Kepala'],
            ['TE', '0410108410', 'Yuni Astuti, M.T.',              'yuni.astuti@kampus.ac.id',     'Lektor'],
            ['TT', '0411118511', 'Eko Prasetyo, M.T.',             'eko.prasetyo@kampus.ac.id',    'Lektor'],
            ['AB', '0412128312', 'Dr. Ratna Dewi, M.M.',           'ratna.dewi@kampus.ac.id',      'Lektor Kepala'],
            ['AB', '0413138813', 'Andi Mahendra, M.B.A.',          'andi.mahendra@kampus.ac.id',   'Asisten Ahli'],
        ];

        foreach ($data as [$kodeProdi, $nidn, $nama, $email, $jabatan]) {
            Dosen::create([
                'prodi_id' => Prodi::where('kode', $kodeProdi)->value('id'),
                'nidn'     => $nidn,
                'nama'     => $nama,
                'email'    => $email,
                'jabatan'  => $jabatan,
            ]);
        }
    }
}
