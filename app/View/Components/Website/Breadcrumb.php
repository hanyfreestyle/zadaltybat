<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $meta ;
    public $catid ;
    public $defH1 ;

    public function __construct(
        $meta = array(),
        $catid = 'home',
        $defH1 = 'h1',

    )
    {

        $this->meta = $meta ;
        $this->catid = $catid ;
        $this->defH1 = $defH1 ;



    }


    public function render(): View|Closure|string
    {
        return view('components.website.breadcrumb');
    }
}
