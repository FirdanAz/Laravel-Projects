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
                'desc'      =>  'Kudus Adalah Kota Kretek'
            ],
            [
                'city'      =>  'Magelang',
                'provinsi'  =>  'Jawa Tengah',
                'desc'      =>  'Magelang Berada Di Jawa tengah'
            ],
            [
                'city'      =>  'Semarang',
                'provinsi'  =>  'Jawa Tengah',
                'desc'      =>  'Semarang adalah ibu kota jawa tengah'
            ],
            
        ])->each(function ($location){
            DB::table('locations')->insert($location);
        });
    }
}
