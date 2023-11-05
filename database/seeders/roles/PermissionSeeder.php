<?php

namespace Database\Seeders\roles;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            ['cat_id'=> '1', 'name' => 'users_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '1', 'name' => 'users_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '1', 'name' => 'users_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '1', 'name' => 'users_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '2', 'name' => 'roles_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '2', 'name' => 'roles_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '2', 'name' => 'roles_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '2', 'name' => 'roles_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '2', 'name' => 'roles_update_permissions','name_ar'=>'تعديل صلاحيات المجموعة','name_en'=>'Roles Update Permissions'],

            ['cat_id'=> '3', 'name' => 'permissions_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '3', 'name' => 'permissions_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '3', 'name' => 'permissions_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '3', 'name' => 'permissions_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '4', 'name' => 'webPrivacy_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '5', 'name' => 'adminlang_view','name_ar'=>'عرض ملفات لغة التحكم','name_en'=>'View Admin Lang'],
            ['cat_id'=> '5', 'name' => 'adminlang_edit','name_ar'=>'تعديل ملفات لغة التحكم','name_en'=>'Edit Admin Lang'],
            ['cat_id'=> '5', 'name' => 'weblang_view','name_ar'=>'عرض ملفات لغة الموقع','name_en'=>'View'],
            ['cat_id'=> '5', 'name' => 'weblang_edit','name_ar'=>'تعديل ملفات لغة الموقع','name_en'=>'Edit'],

            ['cat_id'=> '6', 'name' => 'config_section','name_ar'=>'عرض الاعدادات','name_en'=>'Setting View'],
            ['cat_id'=> '6', 'name' => 'website_config','name_ar'=>'اعدادات الموقع','name_en'=>'Web Site Setting'],

            ['cat_id'=> '7', 'name' => 'defPhoto_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '7', 'name' => 'defPhoto_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '7', 'name' => 'defPhoto_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '7', 'name' => 'defPhoto_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '8', 'name' => 'upFilter_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '8', 'name' => 'upFilter_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '8', 'name' => 'upFilter_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '8', 'name' => 'upFilter_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '9', 'name' => 'Pages_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '9', 'name' => 'Pages_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '9', 'name' => 'Pages_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '9', 'name' => 'Pages_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '9', 'name' => 'Pages_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '9', 'name' => 'Pages_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


            ['cat_id'=> '10', 'name' => 'category_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '10', 'name' => 'category_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '10', 'name' => 'category_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '10', 'name' => 'category_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '10', 'name' => 'category_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '10', 'name' => 'category_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],

            ['cat_id'=> '11', 'name' => 'product_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '11', 'name' => 'product_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '11', 'name' => 'product_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '11', 'name' => 'product_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '11', 'name' => 'product_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


            ['cat_id'=> '12', 'name' => 'AppSetting_view','name_ar'=>'AppSetting_view','name_en'=>'View'],
            ['cat_id'=> '12', 'name' => 'AppSetting_menu','name_ar'=>'AppSetting_menu','name_en'=>'Add'],
            ['cat_id'=> '12', 'name' => 'AppSetting_config','name_ar'=>'AppSetting_config','name_en'=>'Edit'],
            ['cat_id'=> '12', 'name' => 'AppSetting_photo','name_ar'=>'AppSetting_photo','name_en'=>'Delete'],


            ['cat_id'=> '13', 'name' => 'BlogPost_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '13', 'name' => 'BlogPost_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '13', 'name' => 'BlogPost_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '13', 'name' => 'BlogPost_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '13', 'name' => 'BlogPost_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '13', 'name' => 'BlogPost_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],

            ['cat_id'=> '14', 'name' => 'Banner_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '14', 'name' => 'Banner_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '14', 'name' => 'Banner_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '14', 'name' => 'Banner_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '14', 'name' => 'Banner_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],

            ['cat_id'=> '15', 'name' => 'Faq_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '15', 'name' => 'Faq_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '15', 'name' => 'Faq_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '15', 'name' => 'Faq_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '15', 'name' => 'Faq_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '15', 'name' => 'Faq_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


            ['cat_id'=> '16', 'name' => 'shopProduct_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '16', 'name' => 'shopProduct_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '16', 'name' => 'shopProduct_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '16', 'name' => 'shopProduct_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '16', 'name' => 'shopProduct_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '16', 'name' => 'shopProduct_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


            ['cat_id'=> '17', 'name' => 'shopCategory_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '17', 'name' => 'shopCategory_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '17', 'name' => 'shopCategory_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '17', 'name' => 'shopCategory_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '17', 'name' => 'shopCategory_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '17', 'name' => 'shopCategory_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


            ['cat_id'=> '18', 'name' => 'ShopCustomer_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '18', 'name' => 'ShopCustomer_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '18', 'name' => 'ShopCustomer_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '18', 'name' => 'ShopCustomer_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '18', 'name' => 'ShopCustomer_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],

            ['cat_id'=> '19 ', 'name' => 'ShopOrders_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '19 ', 'name' => 'ShopOrders_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '19 ', 'name' => 'ShopOrders_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '19 ', 'name' => 'ShopOrders_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '19 ', 'name' => 'ShopOrders_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],


        ];

        $countData =  Permission::all()->count();
        if($countData == '0'){
            foreach ($data as $value){
                Permission::create($value);
            }
        }
    }
}
