<?php

namespace Database\Seeders\roles;

use App\Models\roles\DBRoleHasPermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class DBRoleHasPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        DBRoleHasPermissions::unguard();
        $tablePath = public_path('db/role_has_permissions.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
