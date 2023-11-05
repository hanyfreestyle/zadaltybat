<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlugNameScript extends Component
{

    public $pagetype;
    public function __construct(
        $pagetype = null
    )
    {
        $this->pagetype = $pagetype ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slug-name-script');
    }
}
