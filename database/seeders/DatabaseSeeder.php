<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Urutan penting: tabel induk harus terisi lebih dulu (foreign key)
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            ProdiSeeder::class,
            DosenSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
        ]);
    }
}
