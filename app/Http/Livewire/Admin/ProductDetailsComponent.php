<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public $product_id;

    public function mount($p_id){
        $this->product_id = $p_id;
    }
    public function render()
    {
        $products = Product::find($this->product_id)->first();

        return view('livewire.admin.product-details-component', ['products' => $products])->layout('layouts.base');
    }
}
