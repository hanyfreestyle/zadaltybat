<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputDate extends Component
{

    public $label;
    public $name;
    public $reqspan;
    public $inputId;
    public $col;
    public $value;
    public $type;
    public $ico;

    public function __construct(
        $name = null,
        $label = null ,
        $reqspan = true ,
        $inputId = null ,
        $col = 'col-lg-3' ,
        $value = null ,
        $type = 'date' ,
        $ico = 'date' ,


    )
    {
        if( $name == null){
            $this->name = "published_at" ;
        }else{
            $this->name = $name ;
        }


        if( $inputId == null){
            $this->inputId =  $this->name;
        }else{
            $this->inputId = $inputId ;
        }


       if( $label == null){
           $this->label = __('admin/def.published_at') ;
       }else{
           $this->label = $label ;
       }

        $this->reqspan = $reqspan ;
        $this->col = $col ;


        if( $value == null){
            $this->value = '' ;
        }else{
            if( $type == 'date')
            {
                $this->value = Carbon::parse($value)->format("m/d/Y");
            }elseif ($type == 'time'){
               // $this->value = Carbon::parse($value)->format("H:m");

                $this->value = $value ;



            }
        }


        if( $type == 'date'){
            $this->ico = 'far fa-calendar-alt';
            $this->type = 'DatePicker';
        }elseif ($type == 'time') {
            $this->ico = 'far fa-clock';
            $this->type = 'TimePicker';
        }



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input-date');
    }
}
