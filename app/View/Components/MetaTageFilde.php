<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaTageFilde extends Component
{
    public $breadcrumb;
    public $bodyH1;
    public $oldData;
    public $placeholder;
    public $slug;
    public $pageData;



    public function __construct(
        $oldData = array(),
        $breadcrumb = false,
        $bodyH1 = false,
        $placeholder = true,
        $slug = true,
        $pageData = null,
    )
    {
        $this->oldData = $oldData ;
        $this->breadcrumb = $breadcrumb ;
        $this->bodyH1 = $bodyH1 ;
        $this->placeholder = $placeholder ;
        $this->slug = $slug ;
        $this->pageData = $pageData ;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-tage-filde');
    }
}
