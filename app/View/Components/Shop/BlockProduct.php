<?php

namespace App\View\Components\Shop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockProduct extends Component
{

    public $product;
    public $category;

    public function __construct(
        $product = array(),
        $category =null,
    )
    {
        $this->product = $product ;
        $this->category = $category ;
    }


    public function render(): View|Closure|string
    {
        return view('components.shop.block-product');
    }
}
