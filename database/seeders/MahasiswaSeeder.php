<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = fake('id_ID');
        $tahunSekarang = (int) date('Y');
        $daftarSemester = [1, 2, 3, 4, 5, 6, 7, 8];

        foreach (Prodi::all() as $prodi) {
            $dosenProdi = Dosen::where('prodi_id', $prodi->id)->pluck('id');

            // 8 mahasiswa per prodi dengan semester berbeda-beda
            foreach ($daftarSemester as $urut => $semester) {
                $angkatan = $tahunSekarang - intdiv($semester - 1, 2);

                Mahasiswa::create([
                    'prodi_id'      => $prodi->id,
                    'dosen_wali_id' => $dosenProdi->random(),
                    'nim'           => sprintf('%d%02d%04d', $angkatan, $prodi->id, $urut + 1),
                    'nama'          => $faker->name(),
                    'angkatan'      => $angkatan,
                    'semester'      => $semester,
                ]);
            }
        }
    }
}
