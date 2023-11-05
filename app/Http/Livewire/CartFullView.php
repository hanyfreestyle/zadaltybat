<?php

namespace App\Http\Livewire;

use App\Http\Controllers\shopping\ShoppingCartController;
use App\Models\admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartFullView extends Component
{
    public function render()
    {
        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();

//        $products = Product::select('id','qty_left','price','sale_price')
//            ->whereIn('id',$CartList->pluck('id'))
//            ->get()->keyBy('id');

        $PageErr = ShoppingCartController::CheckCartProduct();

        /*
        $PageErr = 0 ;
        foreach ($CartList as $ProductCart){

            $options_price = $ProductCart->options->price ;
            $options_sale_price = $ProductCart->options->sale_price ;
            $qty = $ProductCart->qty ;

            $price_err = 0;
            $qty_err = 0 ;

            if($products[$ProductCart->id]->price != $options_price or $products[$ProductCart->id]->sale_price != $options_sale_price  ){
                $price_err = 1;
                $PageErr = $PageErr +1;
            }
            if($qty > $products[$ProductCart->id]->qty_left ){
                $qty_err = 1;
                $PageErr = $PageErr +1;
            }

           Cart::update($ProductCart->rowId , [
                   'options' => [
                       'price' =>  $options_price,
                       'sale_price' =>  $options_sale_price,
                       'qty_left' =>  $products[$ProductCart->id]->qty_left,
                       'price_err' =>  $price_err,
                       'qty_err' =>  $qty_err,
                   ]
               ]);
        }
*/



        $Mass = "";
//        $Brek = "%0a";
//        ///$Brek = '<br/>';
//
//        foreach ($CartList as $ProductCart){
//            $Mass .= $ProductCart->options->ref_code_name.$Brek ;
//            $Mass .= $ProductCart->price."x".$ProductCart->qty.$Brek ;
//        }
//
//        $Mass .= '---------------------'.$Brek ;
//        $Mass .= $subtotal.$Brek ;
//        $Mass = str_replace(" ","%20",$Mass);

        return view('livewire.cart-full-view',compact('CartList','subtotal','Mass','PageErr'));
    }

    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        Cart::remove($cart->where('id',$rowId)->first()->rowId);
        $this->emit('cart_but_updated');
        $this->emit('cart_updated');
        #cart_but_updated
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    increaseProduct
    public function increaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty+1);
        $this->emit('cart_updated');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     decreaseProduct
    public function decreaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty-1);
        $this->emit('cart_updated');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     updateProductPrice
    public function updateProductPrice($rowId){
        $cart = Cart::content();
        $product = Product::where('id',$rowId)->firstOrFail();
        Cart::update( $cart->where('id',$rowId)->first()->rowId ,
            [
                'price' => $product->CartPriceToAdd(),
                'options' => [
                    'price' =>  $product->price,
                    'sale_price' =>  $product->sale_price,
                    'price_err' =>  0,
                    'qty_err' =>  0,
                ]
            ]
        );
        $this->emit('cart_updated');
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     updateProductPrice
    public function updateProductQTY($rowId){
        $cart = Cart::content();
        $product = Product::where('id',$rowId)->firstOrFail();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $product->qty_left);
        $this->emit('cart_updated');

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     update
    public function update($id){
        session()->flash('message_'.$id,__('web/cart.err_no_more_qty'));
    }


}
