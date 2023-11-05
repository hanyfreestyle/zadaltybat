<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTablePlugins extends Component
{
    public $style;
    public $jscode;
    public $tablename;
    public $viewbut;
    public $butlist;
    public $isActive;

    public function __construct(
        $isActive = false,
        $style = false,
        $jscode = false,
        $tablename = "MainDataTable",
        $viewbut = false,
        $butlist = ' "print", "colvis" ', #"copy", "csv", "excel", "pdf", "print", "colvis"
    )
    {
        $this->isActive = $isActive ;
        $this->style = $style ;
        $this->jscode = $jscode;
        $this->tablename = $tablename;
        $this->viewbut = $viewbut;
        $this->butlist = $butlist;
    }


    public function render(): View|Closure|string
    {
        return view('components.data-table-plugins');
    }
}
