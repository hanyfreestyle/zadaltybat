<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterNewsLetter extends Component
{

    public $viewStauts ;
    public $type;

    public function __construct(
        $viewStauts = true,
        $type = 'web',
    )
    {
        $this->viewStauts =  $viewStauts ;
        $this->type =  $type ;
    }

    public function render(): View|Closure|string
    {
        return view('components.website.footer-news-letter');
    }
}
