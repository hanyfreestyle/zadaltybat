<?php

namespace App\View\Components\Website;

use App\Models\admin\config\Setting;
use App\Models\admin\OurClient;
use Cache;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockOurClient extends Component
{
    public $OurClients ;
    public function __construct()
    {
        $stopCash = 0 ;
        if($stopCash){
            $OurClients = OurClient::defWeb()->get();
        }else{
            $OurClients = Cache::remember('OurClient_Cash_'.app()->getLocale(),config('app.def_24h_cash'), function (){
                return  OurClient::defWeb()->get();
            });
        }

        $this->OurClients = $OurClients ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.block-our-client');
    }
}
