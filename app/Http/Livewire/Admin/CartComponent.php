<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed!');
    }

    public function destroyAll(){
        Cart::destroy();
    }
    public function render()
    {
        return view('livewire.admin.cart-component')->layout('layouts.base');
    }
}
