<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlockFaqCarousel extends Component
{
    public $faqCategories ;
    public $lable;
    public $url;
    public function __construct(
        $faqCategories = array(),
        $lable = '',
        $url = 'Page_FaqCatView',
    )
    {
        $this->faqCategories = $faqCategories;

        $this->url = $url;

        if( $lable != null){
            $this->lable = $lable;
        }else{
            $this->lable = __('web/menu.Faq');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.block-faq-carousel');
    }
}
