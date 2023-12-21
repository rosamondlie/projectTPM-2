<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'Location_name'=>'Pademangan',
            'Location_regency'=>'Jakarta Utara',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Sunter',
            'Location_regency'=>'Jakarta Utara',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Kelapa Gading',
            'Location_regency'=>'Jakarta Utara',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Pantai Indah Kapuk',
            'Location_regency'=>'Jakarta Utara',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Mangga Besar',
            'Location_regency'=>'Jakarta Barat',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Kemanggisan',
            'Location_regency'=>'Jakarta Barat',
            'Location_province'=>'DKI Jakarta'
        ]);
        DB::table('locations')->insert([
            'Location_name'=>'Tanjung Duren',
            'Location_regency'=>'Jakarta Barat',
            'Location_province'=>'DKI Jakarta'
        ]);
        // location::factory()->make();
    }
}
