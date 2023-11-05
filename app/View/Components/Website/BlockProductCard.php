<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockProductCard extends Component
{
    public $product ;
    public $category ;
    public function __construct(
        $product,
        $category,
    )
    {
        $this->product = $product ;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.block-product-card');
    }
}
