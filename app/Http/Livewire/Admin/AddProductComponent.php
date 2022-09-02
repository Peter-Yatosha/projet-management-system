<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddProductComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name;
    public $sale_price;
    public $regular_price;
    public $quantity;
    public $tax;
    public $status;
    public $descriptions;
    public $file;

    public function mount(){
        $this->status = $this->status;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
             'name' => 'required',
             'regular_price' => 'required',
             'quantity' => 'required',
             'descriptions' => 'required|max:255',
        ]);
    }

    public function addProduct(){
        $this->validate([
             'name' => 'required',
             'regular_price' => 'required',
             'quantity' => 'required',
             'descriptions' => 'required|max:255',
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->sale_price = $this->sale_price;
        $product->regular_price = $this->regular_price;
        $product->quantity = $this->quantity;
        $product->tax = $this->tax;
        $product->status = $this->status;
        $product->descriptions = $this->descriptions;
        $product->files = $this->file;
        $product->save();

        session()->flash('success_message', 'Product has been saved successfuly!');
    }

    public function render()
    {
        return view('livewire.admin.add-product-component')->layout('layouts.base');
    }
}
