<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\AppSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSettingSeeder extends Seeder
{
    public function run(): void
    {
        AppSetting::unguard();
        $tablePath = public_path('db/app_settings.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
