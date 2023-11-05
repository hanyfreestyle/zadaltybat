<?php

namespace App\Http\Livewire;

use App\Models\admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Livewire\Component;

class CartAddButton extends Component
{
    public $product ;
    public array $quantity = [] ;
    protected $listeners = ['cart_but_updated'=>'render'];
    public $readyToLoad = false;


    public function mount()
    {
        $this->quantity[$this->product->id] = 1 ;
    }


    public function render()
    {
        $cart = Cart::content();
//        return view('livewire.cart-add-button',compact('cart'));

        return view('livewire.cart-add-button',[
            'readyToLoad' => $this->readyToLoad,
            'cart' => $cart
        ]);

    }

    public function addToCart($product_id)
    {
        $Product  = Product::def()
            ->where('id', $product_id)
            ->firstOrFail();

        Cart::add(
            $Product->id,
            $Product->name,
            $this->quantity[$product_id],
            $Product->CartPriceToAdd(),
            [
                'price' => $Product->price,
                'sale_price' => $Product->sale_price,
                'price_err' => null,
                'qty_err' =>null,
            ]
        )->associate('App\Models\admin\Product');
        $this->emit('cart_updated');
    }

    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        $cart->where('id',$rowId)->first()->rowId ;
        Cart::remove($cart->where('id',$rowId)->first()->rowId);
        $this->emit('cart_updated');
    }

    public function increaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty+1);
        $this->emit('cart_updated');
    }

    public function decreaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty-1);
        $this->emit('cart_updated');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     update
    public function update(){
        session()->flash('message',__('web/cart.err_no_more_qty'));
    }

}
