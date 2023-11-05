<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerSignUpRequest;
use App\Http\Requests\UsersCustomersRequest;
use App\Models\UsersCustomers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UsersCustomersController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();

        $stopCash = 0 ;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);


        $SinglePageView = [
            'SelMenu' => 'CustomerProfile',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',

        ];

        $this->SinglePageView = $SinglePageView ;

        $PageMeta = parent::getMeatByCatId('Shop_profiles_pages');
        parent::printSeoMeta($PageMeta);

    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerLogin
    public function CustomerLogin($cart='')
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['breadcrumb'] = "Customer_Login" ;
        return view('shop.customer.form_login',compact('SinglePageView','cart'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerQrLogin
    public function CustomerQrLogin($cart='')
    {
        $user = null;
        $password = null;
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['breadcrumb'] = "Customer_Login" ;
        if(isset($_GET['U'])){
            $user = $_GET['U'];
        }
        if(isset($_GET['P'])){
            $password = $_GET['P'];
        }

        return view('shop.customer.form_login_qr',compact('SinglePageView','cart','user','password'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #CustomerLoginCheckQr
    public function CustomerLoginCheckQr(UsersCustomersRequest $request)
    {
       // $credentials  = $request->only('phone',"password");
        $credentials  = array_merge( $request->only('phone',"password"), ['is_active' => 1 ]);
        if(Auth::guard('customer')->attempt($credentials)){
            $user = UsersCustomers::find(Auth::guard('customer')->user()->id);
            $user->last_login = now();
            $user->save();
            return redirect()->route('Profile_ChangePassword','old='.$user->password_temp);
        }else{
            return  redirect()->route('Customer_login')->with('Error',"البيانات غير صحيحة او عضويتك غير مفعله ");
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #CustomerLoginCheck
    public function CustomerLoginCheck(UsersCustomersRequest $request,$Cart='')
    {

       // $credentials  = $request->only('phone',"password");
        $credentials  = array_merge( $request->only('phone',"password"), ['is_active' => 1 ]);
        if(Auth::guard('customer')->attempt($credentials)){
            $user = UsersCustomers::find(Auth::guard('customer')->user()->id);
            $user->last_login = now();
            $user->save();

            if($Cart == 'cart'){
                return redirect()->route('Shop_CartView');
            }else{
                return redirect()->route('Customer_Profile');
            }
        }else{
            return  redirect()->route('Customer_login')->with('Error',"البيانات غير صحيحة او عضويتك غير مفعله ");
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerSignUp
    public function CustomerSignUp()
    {
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['breadcrumb'] = "Customer_Register" ;
        return view('shop.customer.form_register',compact('SinglePageView'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CustomerCreate
    public function CustomerCreate(CustomerSignUpRequest $request)
    {

        $user = new UsersCustomers();

        $user->name = $request->input('name');
        $user->email =$request->input('email');
        $user->phone =$request->input('phone');
        $user->password = \Hash::make($request->password);
        $user->last_login = now();
        $user->save();

        try {
            $user->save();
            Auth::guard('customer')->login($user);

        } catch (\Exception $e) {
            $err =  $e->getMessage();
            return redirect()->back()->with('err',"dddddd");

        }
        return redirect()->route('Customer_Profile');

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CustomerLogout
    public function CustomerLogout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('Shop_HomePage');
    }

}
