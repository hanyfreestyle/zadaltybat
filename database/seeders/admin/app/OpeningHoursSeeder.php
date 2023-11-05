<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\OpeningHours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpeningHoursSeeder extends Seeder
{

    public function run(): void
    {
        OpeningHours::unguard();
        $tablePath = public_path('db/opening_hours.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
