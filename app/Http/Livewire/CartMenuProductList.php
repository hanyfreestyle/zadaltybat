<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartMenuProductList extends Component
{
    protected $listeners = ['cart_updated'=>'render'];
    public $showimg = false ;

    public function render()
    {
        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();
        return view('livewire.cart-menu-product-list',compact('CartList','subtotal'));
    }


    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        Cart::remove($cart->where('id',$rowId)->first()->rowId);
        $this->emit('cart_but_updated');
        $this->emit('cart_updated');
        #cart_but_updated
    }

}
