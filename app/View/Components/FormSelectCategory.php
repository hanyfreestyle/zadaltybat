<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelectCategory extends Component
{
    public $name;
    public $label;
    public $sendvalue;
    public $requiredSpan;
    public $colrow;
    public $sendArr ;
    public $selectType ;
    public $printValName ;
    public $forcategory ;

    public function __construct(
        $name ="",
        $label = "",
        $sendvalue = "",
        $requiredSpan = true,
        $colrow = "col-lg-4",
        $sendArr = array(),
        $selectType = 'normal',
        $printValName = 'name',
        $forcategory = true,

    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->sendvalue = $sendvalue;
        $this->requiredSpan = $requiredSpan;
        $this->colrow = $colrow;
        $this->sendArr = $sendArr;
        $this->selectType = $selectType;
        $this->printValName = $printValName;
        $this->forcategory = $forcategory;
    }

    public function render(): View|Closure|string
    {
        return view('components.form-select-category');
    }
}
