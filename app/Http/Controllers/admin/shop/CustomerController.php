<?php

namespace App\Http\Controllers\admin\shop;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\admin\shop\CustomerStoreRequest;
use App\Http\Requests\admin\shop\CustomerUpdateRequest;
use App\Http\Requests\customer\ProfileAddressAddRequest;
use App\Http\Requests\customer\ProfileAddressEditRequest;
use App\Models\admin\Page;
use App\Models\admin\shop\Customer;
use App\Models\customer\UsersCustomersAddress;
use App\Models\UsersCustomers;

use Barryvdh\DomPDF\Facade\Pdf;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CustomerController extends AdminMainController
{

    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'ShopCustomer.',
        $controllerName = 'Customer',
        $PrefixRole = 'ShopCustomer',
        $PrefixRoute = '#',
        $pageData = array(),
    )

    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;


        $this->PageTitle = __('admin/menu.shop_customer');

        $this->middleware('permission:'.$PrefixRole.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$PrefixRole.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$PrefixRole.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$PrefixRole.'_delete', ['only' => ['destroy']]);


        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));
        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);

        $sendArr = [
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 1 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;

        $cities = WebMainController::getDataCity();
        View::share('cities', $cities);
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index($id=null)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "List";
        $pageData['Trashed'] = Customer::onlyTrashed()->count();
        $pageData['ConfigUrl'] = route('ShopCustomer.Customer.Config');
        $customers = self::getSelectQuery(Customer::with('city'));
        return view('admin.customer.index',compact('pageData','customers'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SoftDeletes
    public function SoftDeletes()
    {
        $pageData = $this->pageData ;
        $pageData['ViewType'] = "deleteList";
        $customers = self::getSelectQuery(Customer::onlyTrashed());
        return view('admin.customer.index',compact('pageData','customers'));

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Add";
        return view('admin.customer.form_add',compact('pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    store
    public function store(CustomerStoreRequest $request)
    {

        $password_temp = $request->input('phone').'@'.rand(5000,9999);

        $add_customer = new Customer();
        $add_customer->name = $request->input('name');
        $add_customer->company_name = $request->input('company_name');
        $add_customer->city_id = $request->input('city_id');
        $add_customer->phone = $request->input('phone');
        $add_customer->email = $request->input('email');
        $add_customer->whatsapp = $request->input('whatsapp');
        $add_customer->land_phone = $request->input('land_phone');
        $add_customer->password_temp = $password_temp;
        $add_customer->password = Hash::make($password_temp);
        $add_customer->save();


        $saveAddress = New UsersCustomersAddress() ;
        $saveAddress->is_default = true ;
        $saveAddress->name = "العنوان الافتراضى";

        $saveAddress->uuid = Str::uuid()->toString();
        $saveAddress->customer_id = $add_customer->id ;

        $saveAddress->city_id = $request->input('city_id');
        $saveAddress->recipient_name = $request->input('recipient_name');

        $saveAddress->phone  = $request->input('phone_address');
        $saveAddress->phone_option  = $request->input('phone_option');
        $saveAddress->address = $request->input('address');
        $saveAddress->save();

        if($request->input('AddNewSet') !== null){
            return redirect()->back();
        }else{
            return redirect(route($this->PrefixRoute.'.index'))->with('Add.Done',"");
        }

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $customer = Customer::findOrFail($id);
        return view('admin.customer.form_edit',compact('customer','pageData'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     update
    public function update(CustomerUpdateRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->is_active = intval((bool) $request->input( 'is_active'));
        $customer->name = $request->input('name');
        $customer->company_name = $request->input('company_name');
        $customer->city_id = $request->input('city_id');
        $customer->email = $request->input('email');
        $customer->whatsapp = $request->input('whatsapp');
        $customer->land_phone = $request->input('land_phone');
        $customer->save();

        return redirect(route($this->PrefixRoute.'.index'))->with('Add.Done',"");

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Password
    public function Password($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $customer = Customer::findOrFail($id);

        if($customer->password_temp != null and  $customer->last_login == null){
            $url = route('Customer_QrLogin')."?U=".$customer->phone."&P=".$customer->password_temp;

            $qr = [
                'col'=> 'col-lg-8',
                'url'=> $url,
                'photo'=> QrCode::size(300)->generate($url),
            ];
        }else{
            $qr = [
                'col'=> 'col-lg-12',
                'photo'=> null,
                'url'=> null,
            ];
        }


        return view('admin.customer.form_password',compact('pageData','customer','qr'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Password_Update
    public function Password_Update($id,Request $request)
    {
        $validated = $request->validate([
            'new_password' => 'required|min:8',
        ]);

        $customer = Customer::findOrFail($id);

        if($customer->password_temp != null and  $customer->last_login == null){
            $customer->password_temp = $request->input('new_password');
        }

        $customer->password = Hash::make($request->input('new_password'));
        $customer->save();

       // return redirect(route($this->PrefixRoute.'.index'))->with('Edit.Done',"");
        return redirect()->back()->with('Edit.Done',"");
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = Customer::findOrFail($id);
        //$deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();

        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Restore
    public function restored($id)
    {
        Customer::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ForceDeletes
    public function ForceDeletes($id)
    {
        dd('not');
        $deleteRow =  Customer::onlyTrashed()->where('id',$id)->firstOrFail();
        $deleteRow->forceDelete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AddressList($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $customer = Customer::findOrFail($id);
        $customer_address = UsersCustomersAddress::where('customer_id',$customer->id)->get();
        return view('admin.customer.address_list',compact('pageData','customer','customer_address'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #   AddressEdit
    public function AddressEdit($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";
        $address = UsersCustomersAddress::where('id',$id)->with('customer')->firstOrFail();
        return view('admin.customer.address_edit',compact('pageData','address'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AddressUpdate
    public function AddressUpdate(ProfileAddressEditRequest $request,$id){

        $address = UsersCustomersAddress::query()
            ->where('id',$id)
            ->firstOrFail();

        $address->name = $request->input('name');
        $address->city_id = $request->input('city_id');
        $address->recipient_name = $request->input('recipient_name');
        $address->phone  = $request->input('phone');
        $address->phone_option  = $request->input('phone_option');
        $address->address = $request->input('address');
        $address->save();

        return redirect()->route('ShopCustomer.Customer.Address',$address->customer_id)->with('Update.Done',"");

    }




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AddressStore
    public function AddressStore (ProfileAddressAddRequest $request,$id)
    {
        $customer = Customer::where('id',$id)
            ->withCount('addresses')
            ->firstOrFail();



        $saveAddress = New UsersCustomersAddress ;

        if($customer->addresses_count == 0){
            $saveAddress->is_default = true ;
            $saveAddress->name = "العنوان الافتراضى";
        }else{
            $saveAddress->name = 'العنوان '. $customer->addresses_count+1;
        }

        $saveAddress->uuid = Str::uuid()->toString();
        $saveAddress->customer_id = $customer->id ;

        $saveAddress->city_id = $request->input('city_id');
        $saveAddress->recipient_name = $request->input('recipient_name');

        $saveAddress->phone  = $request->input('phone');
        $saveAddress->phone_option  = $request->input('phone_option');
        $saveAddress->address = $request->input('address');
        $saveAddress->save();


        return redirect()->back();
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     config
    public function config()
    {
        $pageData = $this->pageData;
        $pageData['TitlePage'] = __('admin/def.model_config');
        $pageData['ViewType'] = "List";
        return view('admin.customer.config',compact('pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ExportLogin
    public function ExportLogin()
    {
        $pageData = $this->pageData;
        $pageData['TitlePage'] = __('admin/def.model_config');
        $pageData['ViewType'] = "List";

        $customers = Customer::query()
            ->where('password_temp','!=',null)
            ->where('last_login',null)
            ->with('addresses_def')
            ->get();


       // dd($customers);



//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML( "dddd");
//        return $pdf->stream();

//        $pdf =  Pdf::loadView('admin.customer.export_login',compact('customers'));
//        return $pdf->download();



        return view('admin.customer.export_login',compact('pageData', 'customers'));
    }

}
