<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardOrders extends Component
{

    public $title ;
    public $orders;
    public $url;

    public function __construct(
        $title = '',
        $orders = array(),
        $url = '#',
    )
    {
        $this->title = $title ;
        $this->orders = $orders ;
        $this->url = $url ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-orders');
    }
}
