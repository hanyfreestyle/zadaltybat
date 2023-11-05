<?php

namespace App\Http\Controllers;

use App\Helpers\AdminHelper;
use App\Models\admin\config\UploadFilter;
use App\Models\admin\Developer;
use App\Models\admin\Listing;
use App\Models\admin\Post;
use Cache;
use Illuminate\Support\Facades\View;
use Spatie\Valuestore\Valuestore;

class AdminMainController extends Controller
{

    public $modelSettings;

    public function __construct(

    )
    {

       // Cache::flush();
      //  $this->middleware('auth');


        View::share('filterTypes', UploadFilter::cash_UploadFilter());

        $modelsNameArr = [
            "1"=> ['id'=>'1','name'=>__('admin/config/roles.model_1')],
            "2"=> ['id'=>'2','name'=>__('admin/config/roles.model_2')],
            "3"=> ['id'=>'3','name'=>__('admin/config/roles.model_3')],
            "4"=> ['id'=>'4','name'=>__('admin/config/roles.model_4')],
            "5"=> ['id'=>'5','name'=>__('admin/config/roles.model_5')],
            "6"=> ['id'=>'6','name'=>__('admin/config/roles.model_6')],
            "7"=> ['id'=>'7','name'=>__('admin/config/roles.model_7')],
            "8"=> ['id'=>'8','name'=>__('admin/config/roles.model_8')],
            "9"=> ['id'=>'9','name'=>__('admin/config/roles.model_9')],
            "10"=> ['id'=>'10','name'=>__('admin/config/roles.model_10')],
            "11"=> ['id'=>'11','name'=>__('admin/config/roles.model_11')],
            "12"=> ['id'=>'12','name'=>__('admin/config/roles.model_12')],
            "13"=> ['id'=>'13','name'=>__('admin/config/roles.model_13')],
            "14"=> ['id'=>'14','name'=>__('admin/config/roles.model_14')],
            "15"=> ['id'=>'15','name'=>__('admin/config/roles.model_15')],
            "16"=> ['id'=>'16','name'=>__('admin/config/roles.model_16')],
            "17"=> ['id'=>'17','name'=>__('admin/config/roles.model_17')],
            "18"=> ['id'=>'18','name'=>__('admin/config/roles.model_18')],
            "19"=> ['id'=>'19','name'=>__('admin/config/roles.model_19')],
            "20"=> ['id'=>'20','name'=>__('admin/config/roles.model_20')],
            "21"=> ['id'=>'21','name'=>__('admin/config/roles.model_21')],

        ];
        View::share('modelsNameArr', $modelsNameArr);

        $FilterTypeArr = [
            "1"=> ['id'=>'1','name'=>__('admin/config/upFilter.filter_action_1')],
            "2"=> ['id'=>'2','name'=>__('admin/config/upFilter.filter_action_2')],
            "3"=> ['id'=>'3','name'=>__('admin/config/upFilter.filter_action_3')],
            "4"=> ['id'=>'4','name'=>__('admin/config/upFilter.filter_action_4')],
            "5"=> ['id'=>'5','name'=>__('admin/config/upFilter.filter_action_5')],
        ];
        View::share('filterTypeArr', $FilterTypeArr);

        $OrderByArr = [
            "1"=> ['id'=>'1','name'=> __('admin/config/settings.sort_id_DESC')],
            "2"=> ['id'=>'2','name'=> __('admin/config/settings.sort_id_ASC')],
            "3"=> ['id'=>'3','name'=> __('admin/config/settings.sort_name_DESC')],
            "4"=> ['id'=>'4','name'=> __('admin/config/settings.sort_name_ASC')],
            "5"=> ['id'=>'5','name'=> __('admin/config/settings.sort_postion')],
            "6"=> ['id'=>'6','name'=> __('admin/config/settings.sort_date_ASC')],
            "7"=> ['id'=>'7','name'=> __('admin/config/settings.sort_date_DESC')],

        ];
        View::share('OrderByArr', $OrderByArr);


        $modelSettings = Valuestore::make(config_path(config('app.model_settings_name')));
        $modelSettings = $modelSettings->all();
        $this->modelSettings = $modelSettings ;
        View::share('modelSettings', $modelSettings);

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getDefSetting
    public function getDefSetting($controllerName,$key,$def){
        if(isset($this->modelSettings[$controllerName.$key])){
            return $this->modelSettings[$controllerName.$key];
        }else{
            return $def;
        }
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     getSelect
    public function getSelectQuery($query){
        $controllerName = $this->controllerName;

        $perPage = self::getDefSetting($controllerName,'_perpage','5');
        $dataTable =  self::getDefSetting($controllerName,'_datatable','0');
        $orderBy =  self::getDefSetting($controllerName,'_orderby','1');
        switch ($orderBy){
            case 1:
                $query->orderBy('id','DESC');
                break;
            case 2:
                $query->orderBy('id','ASC');
                break;
            case 3:
                $query->orderByTranslation('name','DESC');
                break;
            case 4:
                $query->orderByTranslation('name','ASC');
                break;
            case 5:
                $query->orderBy('postion','ASC');
                break;
            case 6:
                $query->orderBy('published_at','ASC');
                break;
            case 7:
                $query->orderBy('published_at','DESC');
                break;
            default:
        }
        if($dataTable == '1'){
            return $query->get();
        }else{
            return $query->paginate($perPage);
        }
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text
   public function Home()
    {
      return view('admin.dashbord');

    }


}
