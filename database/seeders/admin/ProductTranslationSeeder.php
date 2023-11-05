<?php

namespace Database\Seeders\admin;

use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTranslationSeeder extends Seeder
{

    public function run(): void
    {

        ProductTranslation::unguard();
        $tablePath = public_path('db/product_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
