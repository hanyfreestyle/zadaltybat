<?php

namespace App\Http\Controllers\admin\app;

use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\app\AppMenuRequest;
use App\Http\Requests\admin\app\AppSettingRequest;
use App\Models\admin\app\AppMenu;
use App\Models\admin\app\AppMenuTranslation;
use App\Models\admin\app\AppSetting;
use App\Models\admin\Category;
use App\Models\admin\config\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class AppSettingController extends AdminMainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('permission:AppSetting_config', ['only' => ['AppSetting']]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AppSetting()
    {
        $setting = AppSetting::findOrFail(1);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.setting_web'),
        ];
        return view('admin.app.setting_form')->with(compact('pageData','setting'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AppSettingUpdate(AppSettingRequest $request)
    {
        if(isset($request->status)){
            $request['status'] = '1';
        }else{
            $request['status'] = '0';
        }
        $setting = AppSetting::findOrFail(1);
        $setting->status = $request->input('status');
        $setting->save();
        $setting->update($request->all());
       return redirect()->back();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AppPhotos
    public function AppPhotos()
    {
        $setting = AppSetting::findOrFail(1);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.setting_web'),
        ];
        return view('admin.app.photos_form')->with(compact('pageData','setting'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   AppProfile
    public function AppProfile()
    {
        $menu = AppMenu::where('type','user')->firstOrFail();
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_profile'),
            'route'=> route('App.AppProfileUpdate'),
        ];
        return view('admin.app.profile_form')->with(compact('pageData','menu'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # AppCart
    public function AppCart()
    {
        $menu = AppMenu::where('type','cart')->firstOrFail();
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_cart'),
            'route'=> route('App.AppProfileUpdate'),
        ];
        return view('admin.app.profile_form')->with(compact('pageData','menu'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AppProfileUpdate(AppMenuRequest $request)
    {
        // $menu = AppMenu::where('type','profile')->firstOrFail();

        $id = $request->input('id');
        $menu = AppMenu::findOrFail($id);

        foreach ( config('app.shop_lang') as $key=>$lang) {
            $saveTranslation = AppMenuTranslation::where('menu_id',$menu->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->menu_id = $menu->id;
            $saveTranslation->locale = $key;
            $saveTranslation->url = $request->input($key.'.url');
            $saveTranslation->label  = $request->input($key.'.label');
            $saveTranslation->icon = $request->input($key.'.icon');
            $saveTranslation->title = intval((bool) $request->input( 'title'));
            $saveTranslation->save();
        }

        return redirect()->back();

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AppProfile
    public function AppMenuList()
    {
        $menus = AppMenu::where('type','side')->orderBy('postion')->paginate(20);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_menu'),
        ];
        return view('admin.app.menu_index')->with(compact('pageData','menus'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $menu = AppMenu::findOrNew(0);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_menu'),
            'route'=> route('App.AppMenuList.update',intval($menu->id)),
        ];
        return view('admin.app.profile_form')->with(compact('pageData','menu'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function edit($id)
    {
        $menu = AppMenu::findOrNew($id);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_menu'),
            'route'=> route('App.AppMenuList.update',intval($menu->id)),
        ];
        return view('admin.app.profile_form')->with(compact('pageData','menu'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function storeUpdate(AppMenuRequest $request)
    {

        $id = $request->input('id');
        $menu = AppMenu::findOrNew($id);
        $menu->type = 'side';
        $menu->save();

        foreach ( config('app.shop_lang') as $key=>$lang) {
            $saveTranslation = AppMenuTranslation::where('menu_id',$menu->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->menu_id = $menu->id;
            $saveTranslation->locale = $key;
            $saveTranslation->url = $request->input($key.'.url');
            $saveTranslation->label  = $request->input($key.'.label');
            $saveTranslation->icon = $request->input($key.'.icon');
            $saveTranslation->title = intval((bool) $request->input( 'title'));
            $saveTranslation->save();
        }

        return redirect()->route('App.AppMenuList.index');

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = AppMenu::findOrFail($id);
        $deleteRow->delete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CategorySort
    public function Sort()
    {

        $menus = AppMenu::where('type','side')->orderBy('postion')->get();
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_menu'),
        ];

        return view('admin.app.menu_sort',compact('pageData','menus'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CategorySaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  AppMenu::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }

        return response()->json(['success'=>$positions]);
    }














}
