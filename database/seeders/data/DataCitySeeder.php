<?php

namespace Database\Seeders\data;

use App\Models\data\DataCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class DataCitySeeder extends Seeder
{

    public function run(): void
    {
        DataCity::unguard();
        $tablePath = public_path('db/data_cities.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
