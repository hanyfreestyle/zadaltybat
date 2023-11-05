<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\AppMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppMenuSeeder extends Seeder
{
    public function run(): void
    {
        AppMenu::unguard();
        $tablePath = public_path('db/app_menus.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
