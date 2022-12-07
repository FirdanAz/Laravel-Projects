<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Wisata;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name'          =>  'Pijar',
                'description'   =>  'Pijar Park. Salah satu destinasi baru yang ada di kota kretek ini. Tempatnya saat ini sedang hits dan banyak dikunjungi oleh masyarakat baik lokal maupun dari luar daerah.
                Pijar Park berlokasi di lereng Gunung Muria di Desa Kajar, kecamatan Dewe dan searah jalan saat ke makam jalan Sunan Muria. Jadi ketika kamu sedang berziarah bisa mampir untuk ke destinasi wisata ini. Suasana estetik dari Pijar Park antara siang dan malam memiliki kesannya sendiri. Saat malam hari gemerlap lampu dinyalakan dan ketika siang spot foto nampak tegas dan benderang.',
                'desc'          =>  'Pijar Park. Salah satu destinasi baru yang ada di kota kretek ini.',
                'rate'          =>  4,
                'price'         =>  'Rp10.000',
                'address'       =>  'Colo, Dawe, Kudus - Jawa Tengah - Indonesia',
                'location_id'   =>  1,
                'open_time'     =>  '10:30:00',
                'close_time'    =>  '20:00:00'
            ],

            [
                'name'          =>  'Candi Borobudur',
                'description'   =>  'Candi Borobudur merupakan candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat daya Surakarta, dan 40 km di sebelah barat laut Yogyakarta.',
                'desc'          =>  'Diperkirakan Candi Borobudur dibangun oleh Raja Samaratungga dari Wangsa Syailendra dan baru diselesaikan putrinya, Ratu Pramudawardhani, pada abad ke-9.',
                'rate'          =>  5,
                'price'         =>  'Rp75.000',
                'address'       =>  'Magelang - Jawa Tengah - Indonesia',
                'location_id'   =>  2,
                'open_time'     =>  '07:30:00',
                'close_time'    =>  '16:30:00'
            ],

            [
                'name'          =>  'Lawang Sewu',
                'description'   =>  'Lawang Sewu adalah gedung bersejarah milik PT Kereta Api Indonesia (Persero) yang awalnya digunakan sebagai Kantor Pusat perusahaan kereta api swasta Nederlandsch-Indische Spoorweg Maatschappij (NISM). Gedung Lawang Sewu dibangun secara bertahap di atas lahan seluas 18.232 m2. Bangunan utama dimulai pada 27 Februari 1904 dan selesai pada Juli 1907. Sedangkan bangunan tambahan dibangun sekitar tahun 1916 dan selesai tahun 1918.',
                'desc'          =>  'Lawang Sewu adalah gedung bersejarah milik PT Kereta Api Indonesia (Persero).',
                'rate'          =>  4,
                'price'         =>  'Rp100.000',
                'address'       =>  'Semarang - Jawa Tengah - Indonesia',
                'location_id'   =>  3,
                'open_time'     =>  '08:00:00',
                'close_time'    =>  '17:00:00'
            ],
        ])->each(function ($wisata){
            DB::table('wisatas')->insert($wisata);
        });
    }
}
