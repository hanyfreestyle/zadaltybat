<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardLastNews extends Component
{

    public $postData;
    public function __construct(
        $postData,
    )
    {
        $this->postData = $postData ;

    }


    public function render(): View|Closure|string
    {
        return view('components.website.card-last-news');
    }
}
