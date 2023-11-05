<?php

namespace Database\Seeders\roles;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class DBUsersSeeder extends Seeder
{
    public function run(): void
    {
        User::unguard();
        $tablePath = public_path('db/users.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
