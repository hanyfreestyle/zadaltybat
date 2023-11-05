<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\admin\app\AppMenuSeeder;
use Database\Seeders\admin\app\AppMenuTranslationSeeder;
use Database\Seeders\admin\app\AppSettingSeeder;
use Database\Seeders\admin\app\BranchSeeder;
use Database\Seeders\admin\app\BranchTranslationSeeder;
use Database\Seeders\admin\app\OpeningHoursSeeder;
use Database\Seeders\admin\CategorySeeder;
use Database\Seeders\admin\CategoryTranslationSeeder;
use Database\Seeders\admin\PageSeeder;
use Database\Seeders\admin\PageTranslationSeeder;
use Database\Seeders\admin\CategoryProductSeeder;
use Database\Seeders\admin\ProductPhotoSeeder;
use Database\Seeders\admin\ProductSeeder;
use Database\Seeders\admin\ProductTranslationSeeder;
use Database\Seeders\config\WebPrivacySeeder;
use Database\Seeders\config\WebPrivacyTranslationSeeder;
use Database\Seeders\customer\UsersCustomersAddressSeeder;
use Database\Seeders\customer\UsersCustomersSeeder;
use Database\Seeders\data\DataCitySeeder;
use Database\Seeders\roles\DBModelHasRolesSeeder;
use Database\Seeders\roles\DBRoleHasPermissionsSeeder;
use Database\Seeders\roles\DBRoleSeeder;
use Database\Seeders\roles\DBUsersSeeder;
use Database\Seeders\roles\PermissionSeeder;
use Database\Seeders\config\DefPhotoSeeder;
use Database\Seeders\config\SettingsTableSeeder;
use Database\Seeders\config\SettingsTranslationsTableSeeder;
use Database\Seeders\config\UploadFilterSeeder;
use Database\Seeders\config\UploadFilterSizeSeeder;
use Database\Seeders\shopping\ShoppingOrderAddressSeeder;
use Database\Seeders\shopping\ShoppingOrderLogSeeder;
use Database\Seeders\shopping\ShoppingOrderProductSeeder;
use Database\Seeders\shopping\ShoppingOrderSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(DBUsersSeeder::class);
        $this->call(DBRoleSeeder::class);
        $this->call(DBModelHasRolesSeeder::class);
        $this->call(DBRoleHasPermissionsSeeder::class);

        $this->call(SettingsTableSeeder::class);
        $this->call(SettingsTranslationsTableSeeder::class);
        $this->call(UploadFilterSeeder::class);
        $this->call(UploadFilterSizeSeeder::class);
        $this->call(DefPhotoSeeder::class);
        $this->call(WebPrivacySeeder::class);
        $this->call(WebPrivacyTranslationSeeder::class);


        $this->call(CategorySeeder::class);
        $this->call(CategoryTranslationSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductTranslationSeeder::class);
        $this->call(ProductPhotoSeeder::class);
        $this->call(CategoryProductSeeder::class);


        $this->call(PageSeeder::class);
        $this->call(PageTranslationSeeder::class);

        $this->call(DataCitySeeder::class);
        $this->call(UsersCustomersSeeder::class);
        $this->call(UsersCustomersAddressSeeder::class);

        $this->call(ShoppingOrderAddressSeeder::class);
        $this->call(ShoppingOrderSeeder::class);
        $this->call(ShoppingOrderProductSeeder::class);
        $this->call(ShoppingOrderLogSeeder::class);


       $this->call(AppSettingSeeder::class);
       $this->call(AppMenuSeeder::class);
       $this->call(AppMenuTranslationSeeder::class);
       $this->call(OpeningHoursSeeder::class);

       $this->call(BranchSeeder::class);
       $this->call(BranchTranslationSeeder::class);


    }
}
