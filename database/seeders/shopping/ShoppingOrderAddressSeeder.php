<?php

namespace Database\Seeders\shopping;

use App\Models\shopping\ShoppingOrderAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ShoppingOrderAddressSeeder extends Seeder
{

    public function run(): void
    {
        ShoppingOrderAddress::unguard();
        $tablePath = public_path('db/shopping_order_addresses.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
