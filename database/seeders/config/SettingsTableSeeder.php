<?php

namespace Database\Seeders\config;

use App\Models\admin\config\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class SettingsTableSeeder extends Seeder
{

//    public function run(): void
//    {
//        $settings = [
//            'web_url'=>"#",
//            'web_status'=>"1",
//            'logo'=>"",
//            'favicon'=>"",
//            'phone_num'=>"01221563252",
//            'whatsapp_num'=>"201221563252",
//            'facebook'=>"#",
//            'youtube'=>"#",
//            'twitter'=>"#",
//            'instagram'=>"#",
//            'google_api'=>"#",
//        ];
//
//        $countSetting =  Setting::all()->count();
//        if($countSetting == '0'){
//            Setting::create($settings);
//        }
//    }

    public function run(): void
    {
        Setting::unguard();
        $tablePath = public_path('db/config_settings.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
