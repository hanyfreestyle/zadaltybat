<?php

namespace Database\Seeders\shopping;

use App\Models\shopping\ShoppingOrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ShoppingOrderProductSeeder extends Seeder
{
    public function run(): void
    {
        ShoppingOrderProduct::unguard();
        $tablePath = public_path('db/shopping_order_products.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
