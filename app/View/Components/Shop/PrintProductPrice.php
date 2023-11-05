<?php

namespace App\View\Components\Shop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrintProductPrice extends Component
{

    public $product ;
    public $showAvr ;
    public $printAvr ;
    public function __construct(
        $product  =array(),
        $showAvr  = false,
        $printAvr  = null,
    )
    {
        $this->product = $product ;
        $this->showAvr = $showAvr ;

        if($this->showAvr == true){
            if(intval($product->sale_price) > 0 and $product->sale_price < $product->price){
                $discount = $product->price - $product->sale_price   ;
                $this->printAvr = intval( ($discount /  $product->price ) * 100) ;
            }
        }else{
            $this->printAvr = $printAvr ;
        }



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shop.print-product-price');
    }
}
