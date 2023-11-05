<?php

namespace App\Http\Livewire;

use App\Models\customer\UsersCustomersAddress;
use Livewire\Component;

class ShowAddressBlock extends Component
{
    public $addresses ;
    public $city_id = '';
    public $printAddress ;


    public function mount()
    {
       foreach ($this->addresses as $address ){
            if($address->is_default == 1){
                $this->printAddress = $address;
            }
        }
    }

    public function render()
    {
        return view('livewire.show-address-block');
    }


    public function changeEvent($value)
    {

        $address = UsersCustomersAddress::where('uuid',$value)
            ->first();
        $this->printAddress = $address;
    }
}
