<?php

namespace Database\Seeders\shopping;

use App\Models\shopping\ShoppingOrderLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ShoppingOrderLogSeeder extends Seeder
{
    public function run(): void
    {
        ShoppingOrderLog::unguard();
        $tablePath = public_path('db/shopping_order_logs.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
