<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockAdditionalTable extends Component
{
    public $rowData;

    public function __construct(
        $rowData = array(),
    )
    {
        $this->rowData = $rowData ;

    }


    public function render(): View|Closure|string
    {
        return view('components.website.block-additional-table');
    }
}
