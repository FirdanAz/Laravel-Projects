<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class LocationSeeder extends Seeder
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
                'city'      =>  'Kudus',
                'provinsi'  =>  'Jawa Tengah',
                'desc'      =>  'Kudus Adalah Kota Kretek',
                'owner_id'  =>  1
            ],
            [
                'city'      =>  'Magelang',
                'provinsi'  =>  'Jawa Tengah',
                'desc'      =>  'Magelang Berada Di Jawa tengah',
                'owner_id'  =>  1
            ],
            [
                'city'      =>  'Semarang',
                'provinsi'  =>  'Jawa Tengah',
                'desc'      =>  'Semarang adalah ibu kota jawa tengah',
                'owner_id'  =>  2
            ],
            
        ])->each(function ($location){
            DB::table('locations')->insert($location);
        });
    }
}
