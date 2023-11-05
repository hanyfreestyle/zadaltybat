<?php

namespace Database\Seeders\admin\app;

use App\Models\admin\app\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        Branch::unguard();
        $tablePath = public_path('db/branches.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
