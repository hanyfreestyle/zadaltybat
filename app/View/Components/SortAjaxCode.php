<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SortAjaxCode extends Component
{

    public $style_name;
    public $url;

    public function __construct(
        $style_name = 'hanySort',
        $url = '#',
    )
    {
         $this->style_name = $style_name;
         $this->url = $url;
    }


    public function render(): View|Closure|string
    {
        return view('components.sort-ajax-code');
    }
}
