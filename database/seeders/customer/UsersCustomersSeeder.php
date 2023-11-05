<?php

namespace Database\Seeders\customer;

use App\Models\UsersCustomers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class UsersCustomersSeeder extends Seeder
{
    public function run(): void
    {
        UsersCustomers::unguard();
        $tablePath = public_path('db/users_customers.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
