<?php

namespace Database\Seeders\admin;

use App\Models\admin\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        CategoryProduct::unguard();
        $tablePath = public_path('db/category_product.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
