<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Cart;

class ProductComponent extends Component
{
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item has added to Cart successfuly!');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $products = Product::where('status','instock')->get();
        return view('livewire.admin.product-component', [
            'products' => $products,
            ])->layout('layouts.base');
    }
}
