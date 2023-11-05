<?php

namespace Database\Seeders\admin;

use App\Models\admin\ProductPhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPhotoSeeder extends Seeder
{

    public function run(): void
    {
        ProductPhoto::unguard();
        $tablePath = public_path('db/product_photos.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
