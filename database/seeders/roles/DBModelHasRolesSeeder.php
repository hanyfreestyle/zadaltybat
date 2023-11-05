<?php

namespace Database\Seeders\roles;

use App\Models\roles\DBModelHasRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class DBModelHasRolesSeeder extends Seeder
{
    public function run(): void
    {
        DBModelHasRoles::unguard();
        $tablePath = public_path('db/model_has_roles.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
