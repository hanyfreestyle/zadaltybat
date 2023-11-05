<?php

namespace App\Http\Controllers\admin\config;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\config\WebPrivacyRequest;
use App\Models\admin\config\WebPrivacy;
use App\Models\admin\config\WebPrivacyTranslation;
use Illuminate\Http\Request;
use  DB;
use Illuminate\Support\Facades\View;


class WebPrivacyController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;

    function __construct($controllerName = 'webPrivacy')
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->PageTitle = __('admin/menu.webPrivacy');

        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['delete']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;

        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $rowData = self::getSelectQuery(WebPrivacy::defquery());
        return view('admin.config.web_privacy_index',compact('pageData','rowData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";
        $rowData = new WebPrivacy();
        return view('admin.config.web_privacy_form',compact('rowData','pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $rowData = WebPrivacy::findOrFail($id);
        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";
        return view('admin.config.web_privacy_form',compact('rowData','pageData'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(WebPrivacyRequest $request, $id='0')
    {

        $saveData =  WebPrivacy::findOrNew($id) ;
        $saveData->name = $request->input('name');
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = WebPrivacyTranslation::where('privacy_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->privacy_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->h1 = $request->input($key.'.h1');
            $saveTranslation->h2 = $request->input($key.'.h2');
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->lists = $request->input($key.'.lists');
            $saveTranslation->save();
        }
        if($id == '0'){
            return redirect(route('config.webPrivacy.index'))->with('Add.Done',"");
        }else{
            return redirect(route('config.webPrivacy.index'))->with('Edit.Done',"");
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     delete
    public function delete($id)
    {
        WebPrivacy::findOrFail($id)->delete();
        return redirect(route('config.webPrivacy.index'))->with('confirmDelete','');
    }




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Sort
    public  function Sort(){

        $sendArr = ['TitlePage' => $this->PageTitle ,'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $WebPrivacy = WebPrivacy::with('translation')
            ->orderBy('postion','asc')
            ->get();
        return view('admin.config.web_privacy_sort',compact('WebPrivacy','pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  WebPrivacy::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        return response()->json(['success'=>$positions]);
    }


}
