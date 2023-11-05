<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterColRow extends Component
{

    public $title ;
    public $prefix;

    public function __construct(
        $title = "",
        $prefix = "",

    )
    {
        $this->title = $title ;
        $this->prefix = $prefix ;

    }


    public function render(): View|Closure|string
    {
        return view('components.website.footer-col-row');
    }
}
