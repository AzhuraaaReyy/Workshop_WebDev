<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasi = [
            ['nama_lokasi' => 'Stadion Utama'],
            ['nama_lokasi' => 'Taman Kota'],
            ['nama_lokasi' => 'Galeri Seni Kota'],
        ];
        foreach ($lokasi as $lokasi) {
            Lokasi::create($lokasi);
        }
    }
}
