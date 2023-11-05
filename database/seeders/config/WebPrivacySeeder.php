<?php

namespace Database\Seeders\config;


use App\Models\admin\config\WebPrivacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class WebPrivacySeeder extends Seeder
{

    public function run(): void
    {
        WebPrivacy::unguard();
        $tablePath = public_path('db/config_web_privacies.sql');
        DB::unprepared(file_get_contents($tablePath));

    }
}
