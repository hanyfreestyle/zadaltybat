<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\AppMenuTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppMenuTranslationSeeder extends Seeder
{
    public function run(): void
    {
        AppMenuTranslation::unguard();
        $tablePath = public_path('db/app_menu_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
