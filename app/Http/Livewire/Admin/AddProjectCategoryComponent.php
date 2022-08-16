<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProjectCategory;
use Livewire\Component;

class AddProjectCategoryComponent extends Component
{
    public $category;

    public function updated($fields){
        $this->validateOnly($fields, [
            'category' => 'required',
        ]);
    }

    public function addCategory(){
        $this->validate([
            'category' => 'required',
        ]);

        $category = new ProjectCategory();

        $category->name = $this->category;

        $category->save();

        session()->flash('success_message', 'Project Category has been successfuly created!');
    }

    public function render()
    {
        return view('livewire.admin.add-project-category-component')->layout('layouts.base');
    }
}
