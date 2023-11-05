<?php

namespace App\Http\Controllers\admin\app;

use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\app\OpeningHoursRequest;
use App\Models\admin\app\OpeningHours;


class OpeningHoursController extends AdminMainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('permission:AppSetting_config', ['only' => ['AppSetting']]);
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function OpeningHours()
    {
        $openingHours = OpeningHours::query()->orderBy('postion')->get();

//        $weekdays = Carbon::getDays();
////       dd(date('w '));
//       dd($weekdays);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
        ];
        return view('admin.app.opening_hours_form')->with(compact('pageData','openingHours'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function OpeningHoursUpdate(OpeningHoursRequest $request,$id)
    {
        $day_update = OpeningHours::findOrFail($id);
        $day_update->open_from = $request->input('open_from');
        $day_update->open_to = $request->input('open_to');
        $day_update->delivery_from = $request->input('delivery_from');
        $day_update->delivery_to = $request->input('delivery_to');
        $day_update->save();
        return redirect()->back();
    }

}



