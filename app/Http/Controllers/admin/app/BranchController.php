<?php

namespace App\Http\Controllers\admin\app;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\app\BranchRequest;
use App\Models\admin\app\Branch;
use App\Models\admin\app\BranchTranslation;
use Illuminate\Http\Request;

class BranchController extends AdminMainController
{
    function __construct()
    {
        parent::__construct();
        $this->middleware('permission:AppSetting_config', ['only' => ['AppSetting']]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     BranchList
    public function BranchList ()
    {
        $Branches = Branch::query()->orderBy('postion')->paginate(20);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_Branches'),
        ];
        return view('admin.app.branch_index')->with(compact('pageData','Branches'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $branch = Branch::findOrNew(0);
        $pageData =[
            'ViewType'=>"Add",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_Branches'),
            // 'route'=> route('App.Branch.update',intval($branch->id)),
        ];
        return view('admin.app.branch_form')->with(compact('pageData','branch'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function edit($id)
    {
        $branch = Branch::findOrNew($id);
        $pageData =[
            'ViewType'=>"Edit",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_Branches'),
        ];
        return view('admin.app.branch_form')->with(compact('pageData','branch'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function storeUpdate(BranchRequest $request)
    {
        $id = $request->input('id');
        $branch = Branch::findOrNew($id);
        $branch->is_active = intval((bool) $request->input( 'is_active'));
        $branch->lat = $request->input('lat');
        $branch->long = $request->input('long');
        $branch->direction = $request->input('direction');
        $branch->phone = $request->input('phone');
        $branch->whatsapp = $request->input('whatsapp');
        $branch->save();

        foreach ( config('app.shop_lang') as $key=>$lang) {
            $saveTranslation = BranchTranslation::where('branch_id',$branch->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->branch_id = $branch->id;
            $saveTranslation->locale = $key;
            $saveTranslation->title = $request->input($key.'.title');
            $saveTranslation->address  = $request->input($key.'.address');
            $saveTranslation->work_hours = $request->input($key.'.work_hours');
            $saveTranslation->save();
        }
        return redirect()->route('App.Branch.index');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Branch::findOrFail($id);
        $deleteRow->delete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CategorySort
    public function Sort()
    {
        $branches = Branch::query()->orderBy('postion')->get();
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.app_setting'),
            'cardTitle'=>__('admin/menu.app_Branches'),
        ];
        return view('admin.app.branch_sort',compact('pageData','branches'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CategorySaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  Branch::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        return response()->json(['success'=>$positions]);
    }




}
