<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{

    public function Adminlogin()
    {
        return view('auth.login');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AdminLogout

    public function AdminLogout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function AdminLoginCheck(Request $request)
    {

        $credentials = $request->only('email',"password");

        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->route('admin.Dashboard');
        }else{
            return  redirect()->route('login');
        }


    }
}
