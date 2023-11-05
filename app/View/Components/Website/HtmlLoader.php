<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlLoader extends Component
{
    public $viewState ;

    public function __construct(
        $viewState = false,
    )
    {
        $this->viewState = $viewState ;
    }


    public function render(): View|Closure|string
    {
        return view('components.website.html-loader');
    }
}
