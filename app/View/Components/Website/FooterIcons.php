<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterIcons extends Component
{
    public $viewStauts ;
    public function __construct(
        $viewStauts = true
    )
    {
        $this->viewStauts =  $viewStauts ;
    }

    public function render(): View|Closure|string
    {
        return view('components.website.footer-icons');
    }
}
