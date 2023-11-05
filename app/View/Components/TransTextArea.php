<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TransTextArea extends Component
{
    public $label ;
    public $name ;
    public $reqname ;
    public $value ;
    public $dir ;
    public $newreqname ;
    public $reqspan ;
    public $placeholder ;
    public $placeholderPrint ;
    public $inputid ;
    public $googlespan ;
    public $googlespan_tip ;
    public $newstyle ;

    public function __construct(
        $label=null,
        $name,
        $reqname,
        $value,
        $dir="null",
        $newreqname = "",
        $reqspan = true,
        $placeholderPrint = "",
        $placeholder = false,
        $inputid=null,
        $googlespan=false,
        $googlespan_tip=false,
        $newstyle = null,
    )
    {
        $this->label = $label;
        $this->name = $name;
        $this->inputid = $inputid;
        $this->googlespan = $googlespan;
        $this->googlespan_tip = $googlespan_tip;
        $this->newstyle = $newstyle;

        $this->value = $value;
        $this->reqname = $reqname;
        $this->dir = $dir;
        $this->reqspan = $reqspan;
        $this->newreqname =  trim(str_replace('_', " ", $this->reqname)) ;

        $this->placeholder = $placeholder;
        if($this->placeholder == true){
            $this->placeholderPrint = $this->label;
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trans-text-area');
    }
}
