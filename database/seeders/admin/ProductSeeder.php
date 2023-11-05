<?php

namespace Database\Seeders\admin;


use App\Models\admin\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{


    public function run(): void
    {
        Product::unguard();
        $tablePath = public_path('db/products.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
