<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = [
            [
                'user_id' => 2,
                'kategori_id' => 1,
                'lokasi_id' => 1,
                'judul' => 'Konser Musik Rock',
                'deskripsi' => 'Nikmati Malam Penuh Energi dengan Band Rock Terkenal',

                'gambar' => 'rock.jpg',
                'tanggal' => '2024-08-15 19:00:00',
            ],
            [
                'user_id' => 2,
                'kategori_id' => 2,
                'lokasi_id' => 2,
                'judul' => 'Pameran Seni Kontemporer',
                'deskripsi' => 'Jelajahi karya seni modern dari seniman lokal dan international',

                'gambar' => 'pameran.jpg',
                'tanggal' => '2024-09-10 10:00:00',
            ],
            [
                'user_id' => 2,
                'kategori_id' => 3,
                'lokasi_id' => 3,
                'judul' => 'Festival Makanan Internasional',
                'deskripsi' => 'Cicipi berbagai hidangan lezat dari seluruh dunia.',

                'gambar' => 'festival.jpg',
                'tanggal' => '2024-10-05 12:00:00',
            ],

        ];
        foreach ($event as $event) {
            Event::create($event);
        }
    }
}
