<?php

namespace Database\Seeders\shopping;

use App\Models\shopping\ShoppingOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ShoppingOrderSeeder extends Seeder
{

    public function run(): void
    {
        ShoppingOrder::unguard();
        $tablePath = public_path('db/shopping_orders.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
