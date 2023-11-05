<?php

namespace App\Http\Controllers\admin\shop;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\admin\shop\OrderConfirmNewRequest;
use App\Http\Requests\admin\shop\OrderConfirmPendingRequest;
use App\Models\admin\Product;
use App\Models\admin\shop\Customer;
use App\Models\admin\shop\Order;
use App\Models\shopping\ShoppingOrder;
use App\Models\shopping\ShoppingOrderLog;
use App\Models\shopping\ShoppingOrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class OrderController extends AdminMainController
{

    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'ShopOrders.',
        $controllerName = 'Orders',
        $PrefixRole = 'ShopOrders',
        $PrefixRoute = '#',
        $pageData = array(),
    )

    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;


        $this->PageTitle = __('admin/menu.shop_orders');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index','OrderView']]);
       // $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['ConfirmNew','ConfirmPending']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);


        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);

        $sendArr = [
            'AddPageUrl' =>  "#" ,
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 0 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

        $cities = WebMainController::getDataCity();
        View::share('cities', $cities);
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";


        switch (Route::currentRouteName()) {
            case "ShopOrders.New.index":
                $pageData['title'] = __('admin/order.status_1');
                $status = 1;
                break;
            case "ShopOrders.Pending.index":
                $pageData['title'] = __('admin/order.status_2');
                $status = 2;
                break;
            case "ShopOrders.Recipient.index":
                $pageData['title'] = __('admin/order.status_3');
                $status = 3;
                break;

            case "ShopOrders.Rejected.index":
                $pageData['title'] = __('admin/order.status_4');
                $status = 4;
                break;

            case "ShopOrders.Canceled.index":
                $pageData['title'] = __('admin/order.status_5');
                $status = 5;
                break;
            default:
                $pageData['title'] = __('admin/order.status_1');
                $status = 1;
        }

        $orders = self::getSelectQuery(Order::def()->where('status',$status));
        return view('admin.orders.index',compact('pageData','orders'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     OrderView
    public function OrderView($uuid)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['title'] =__('web/orders.title_view');

        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            App::abort(404);
        }

        $order = Order::query()
            ->where('uuid',$uuid)
            ->with('products')
            ->with('customer')
            ->with('address')
            ->with('orderlog')
            ->firstOrFail();

        return view('admin.orders.view_order', compact('order','pageData'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ConfirmNew
    public function ConfirmNew(OrderConfirmNewRequest $request, $uuid)
    {
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            App::abort(404);
        }

        $order = Order::query()
            ->where('uuid',$uuid)
            ->where('status',1)
            ->firstOrFail();


        if($request->input('order_status') == 1){
            $newStatus = '2';
        }elseif ($request->input('order_status') == 2){
            $newStatus = '4';
        }
        $order->status = $newStatus ;
        $order->save();

        $addLog = new ShoppingOrderLog();
        $addLog->order_id = $order->id;
        $addLog->user_id = Auth::user()->id;
        $addLog->add_date = now();
        $addLog->notes = $request->input('notes');
        $addLog->save();

        return redirect()->route('ShopOrders.New.index');

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ConfirmNew
    public function ConfirmPending(OrderConfirmPendingRequest $request, $uuid)
    {
        $isUuid = Str::isUuid($uuid);
        if(!$isUuid){
            App::abort(404);
        }
        $order = Order::query()
            ->where('uuid',$uuid)
            ->where('status',2)
            ->firstOrFail();

        $order->invoice_number = $request->input('invoice_number');
        $order->status = 3 ;
        $order->save();

        $addLog = new ShoppingOrderLog();
        $addLog->order_id = $order->id;
        $addLog->user_id = Auth::user()->id;
        $addLog->add_date = now();
        $addLog->notes = $request->input('notes');
        $addLog->save();

        return redirect()->route('ShopOrders.New.index');

    }




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     config
    public function config()
    {
        $pageData = $this->pageData;
        $pageData['TitlePage'] = __('admin/def.model_config');
        $pageData['ViewType'] = "List";
        return view('admin.orders.config',compact('pageData'));
    }

}
