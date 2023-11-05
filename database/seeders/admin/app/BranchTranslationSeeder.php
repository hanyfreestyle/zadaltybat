<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\BranchTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BranchTranslationSeeder extends Seeder
{
    public function run(): void
    {
        BranchTranslation::unguard();
        $tablePath = public_path('db/branch_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
