<?php

namespace Database\Seeders\customer;

use App\Models\customer\UsersCustomersAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class UsersCustomersAddressSeeder extends Seeder
{
    public function run(): void
    {
        UsersCustomersAddress::unguard();
        $tablePath = public_path('db/users_customers_addresses.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
