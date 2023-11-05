<?php

namespace Database\Seeders\roles;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;
use Spatie\Permission\Models\Role;


class DBRoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::unguard();
        $tablePath = public_path('db/roles.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
