<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['JTI', 'Teknologi Informasi'],
            ['JTE', 'Teknik Elektro'],
            ['JAB', 'Administrasi Bisnis'],
        ];

        foreach ($data as [$kode, $nama]) {
            Jurusan::create(compact('kode', 'nama'));
        }
    }
}
