<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public $lable ;
    public $size ;
    public $bg ;
    public $tip ;
    public $url ;
    public $icon ;
    public $type ;
    public $id;
    public $sweetDelClass;
    public $printLable;
    public $count;

    public function __construct(
        $url = "#",
        $lable = "",
        $size = "s",
        $bg = "p",
        $tip = false,
        $icon = null,
        $type = null,
        $id = null,
        $sweetDelClass = '',
        $printLable = '',
        $count = null,

    )
    {
       //  dd($printLable);
        $this->printLable = $printLable;
        $this->lable = $lable;
        $this->tip = $tip;
        $this->url = $url;
        $this->icon = $icon;

        $this->size = getButSize($size);
        $this->bg = getBgColor($bg);
        $this->id = $id;
        $this->sweetDelClass = $sweetDelClass;
        $this->count = $count;

        if($type){
            switch ($type) {
                case 'add':
                    $this->icon = 'fas fa-plus-square';
                    $this->bg = getBgColor('p');
                    $this->printLable = __('admin/form.button_add');
                    break;

                case 'edit':
                    $this->icon = 'fas fa-pencil-alt';
                    $this->bg = getBgColor('i');
                    $this->printLable =__('admin/form.button_edit');
                    break;

                case 'delete':
                    $this->icon = 'fas fa-trash';
                    $this->bg = getBgColor('d');
                    $this->printLable =__('admin/form.button_delete');
                    break;

                case 'deleteSweet':
                    $this->icon = 'fas fa-trash ';
                    $this->bg = getBgColor('d');
                    $this->printLable = __('admin/form.button_delete');
                    $this->sweetDelClass = ' sweet_daleteBtn_noForm ';
                    break;

                case 'deleteSweet_err':
                    $this->icon = 'fas fa-trash ';
                    $this->bg = getBgColor('d');
                    $this->printLable = __('admin/form.button_delete');
                    $this->sweetDelClass = ' sweet_daleteBtn__err ';
                    break;

                case 'force':
                    $this->icon = 'fas fa-trash';
                    $this->bg = getBgColor('d');
                    $this->printLable =__('admin/page.del_force');
                    break;

                case 'restor':
                    $this->icon = 'fas fa-redo';
                    $this->bg = getBgColor('p');
                    $this->printLable =__('admin/page.del_restor');
                    break;

                case 'sort':
                    $this->icon = 'fas fa-sort-amount-up';
                    $this->bg = getBgColor('i');
                    $this->printLable = __('admin/form.button_sort');
                    break;

                case 'back':
                    $this->icon = 'fas fa-hand-point-left';
                    $this->bg = getBgColor('dark');
                    $this->printLable =  __('admin/form.button_back');
                    break;

                case 'data_table':
                    $this->icon = 'fas fa-info-circle';
                    $this->bg = getBgColor('dark');
                    $this->printLable =  __('admin/def.table_info');
                    break;

                case 'cat':
                    $this->icon = 'fas fa-sitemap';
                    $this->bg = getBgColor('dark');
                    $this->printLable =  __('admin/menu.web_category');
                    break;

                case 'morePhoto':
                    $this->icon = 'fas fa-images';
                    if(isset($bg)){
                        $this->bg = getBgColor($bg);
                    }else{
                        $this->bg = getBgColor('p');
                    }

                    $this->printLable =__('admin/form.button_more_photo');
                    break;

                default:

            }
        }else{
           // $this->lable = $lable;
        }


        if(isset($this->count)){
            if($this->count == '0'){
                $this->bg = getBgColor('dark');
            }else{
                $this->bg = getBgColor('p');
            }

        }



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
