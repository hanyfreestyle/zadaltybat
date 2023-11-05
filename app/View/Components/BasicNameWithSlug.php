<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BasicNameWithSlug extends Component
{

    public $rowData;
    public $col;
    public $pageData;

    public function __construct(
        $rowData =array(),
        $col = 'col-lg-12',
        $pageData =array(),
    )
    {
        $this->rowData = $rowData ;
        $this->col = $col ;
        $this->pageData = $pageData ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.basic-name-with-slug');
    }
}
