<?php
namespace App\Http\Controllers;

use App\Models\admin\Post;
use App\Models\admin\shop\Order;

class HomeController extends WebMainController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Dashboard
    public function Dashboard ()
    {

        $newOrder = Order::query()
            ->where('status',1)
            ->with('customer')
            ->get();


        $pendingOrder = Order::query()
            ->where('status',2)
            ->with('customer')
            ->get();

        $recipientOrder = Order::query()
            ->where('status',3)
            ->with('customer')
            ->get();



        return view('admin.dashbord',compact('newOrder','pendingOrder','recipientOrder'));
    }


    public function index()
    {

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Dashboard
    public function Dashboard_xxx ()
    {

        $PhoneNumber = '01010881921';
        $SendMessage = "test From Laravel";
        $PhoneNumber = '+2'.$PhoneNumber;
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.wassenger.com/v1/messages",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            //  CURLOPT_POSTFIELDS => "{\"phone\":\"$PhoneNumber\",\"message\":\"$SendMessage\",\"media\":{\"file\":\"62c1aaff45ab9eae1002098b\"}}",
            CURLOPT_POSTFIELDS => "{\"phone\":\"$PhoneNumber\",\"message\":\"$SendMessage\"}",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Token: 8592e88ef28ba32bd5e5b59c11a59f864a898e53b94cbacb04a87dc1f0c377c1887491212d364739"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

    }


}
