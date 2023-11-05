<?php

namespace Database\Seeders\config;

use App\Models\admin\config\WebPrivacy;
use App\Models\admin\config\WebPrivacyTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class WebPrivacyTranslationSeeder extends Seeder
{

    public function run(): void
    {
        WebPrivacyTranslation::unguard();
        $tablePath = public_path('db/config_web_privacy_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
