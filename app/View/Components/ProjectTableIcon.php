<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectTableIcon extends Component
{

    public $name ;
    public $icon ;
    public $url ;
    public $count ;

    public function __construct(
        $name = "",
        $icon ="",
        $url ="#",
        $count ="0",

    )
    {
        $this->name = $name ;
        $this->icon = $icon ;
        $this->url = $url ;
        $this->count = $count ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-table-icon');
    }
}
