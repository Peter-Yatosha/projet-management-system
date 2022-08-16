<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProjectCategory;
use Livewire\Component;

class EditProjectCategoryComponent extends Component
{
    public $category;
    public $category_id;

    public function mount($cat_id){
        $category = ProjectCategory::where('id', $cat_id)->first();
        $this->category = $category->name;
        $this->category_id = $category->id;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'category' => 'required',
        ]);
    }

    public function editCategory(){
        $this->validate([
            'category' => 'required',
        ]);

        $category = ProjectCategory::find($this->category_id);
        $category->name = $this->category;
        $category->save();
        session()->flash('success_message', 'Category has been updated successfuly!');
    }

    public function render()
    {
        return view('livewire.admin.edit-project-category-component')->layout('layouts.base');
    }
}
