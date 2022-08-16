<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProjectCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category = ProjectCategory::find($id);
        $category->delete();
        session()->flash('success_message', 'Category has been successfuly deleted!');
    }

    public function render()
    {
        $categories = ProjectCategory::simplePaginate(5);

        return view('livewire.admin.project-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
