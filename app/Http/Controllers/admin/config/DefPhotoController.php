<?php
namespace App\Http\Controllers\admin\config;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\config\DefPhotoRequest;
use App\Models\admin\config\DefPhoto;
use Illuminate\Http\Request;
use Cache ;

class DefPhotoController extends AdminMainController
{

    public $controllerName ;

    function __construct($controllerName = 'defPhoto')
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit','sortDefPhotoList']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # ClearCash
    public function ClearCash(){
        foreach ( config('app.lang_file') as $key=>$lang){
            Cache::forget('DefPhotoList_Cash_'.$key);
        }
        Cache::forget('DefPhoto_Cash');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index(){
        $sendArr = ['TitlePage' => __('admin/menu.setting_def_photo'),'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $defPhoto = glob("Def/*");
        $rowData = DefPhoto::orderBy('postion')->paginate(16);
        return view('admin.config.defphoto_index',compact('pageData','rowData','defPhoto'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create(){
        $sendArr = ['TitlePage' => __('admin/menu.setting_def_photo'),'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";

        $rowData = DefPhoto::findOrNew(0);
        return view('admin.config.defphoto_form',compact('pageData','rowData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id){

        $sendArr = ['TitlePage' => __('admin/menu.setting_def_photo'),'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";

        $rowData = DefPhoto::findOrFail($id);
        return view('admin.config.defphoto_form',compact('rowData','pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id){
        $deleteRow = DefPhoto::findOrFail($id);
        $deleteRow = AdminHelper::onlyDeletePhotos($deleteRow,3);
        $deleteRow->delete();
        self::ClearCash();
        return redirect(route('config.defPhoto.index'))->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(DefPhotoRequest $request,$id='0'){
        $request-> validated();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('def-photo');
        $saveImgData->setnewFileName($request->cat_id);
        $saveImgData->UploadOne($request);

        $saveData =  DefPhoto::findOrNew($id) ;
        $saveData->cat_id = $request->input('cat_id');

        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);

        $saveData->save();
        self::ClearCash();

        if($id == '0'){
            return redirect(route('config.defPhoto.index'))->with('Add.Done',__('general.alertMass.confirmAdd'));
        }else{
            return  back()->with('Edit.Done',__('general.alertMass.confirmEdit'));
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     sortDefPhotoList
    public function sortDefPhotoList(){
        $sendArr = ['TitlePage' => __('admin/menu.setting_def_photo'),'selMenu'=> 'config.' ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);

        $rowData = DefPhoto::orderBy('postion')->paginate(50);
        $pageData['ViewType'] = "List";
        return view('admin.config.defphoto_indexSort',compact('pageData','rowData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     sortDefPhotoSave
    public function sortDefPhotoSave(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  DefPhoto::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        self::ClearCash();
        return response()->json(['success'=>$positions]);
    }

}
