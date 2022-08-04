<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use Livewire\Component;

class DepartmentComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
        ]);
    }
    public function createDepartment(){
        $this->validate([
            'name' => 'required',
        ]);

        $department = new Department();

        $department->name = $this->name;
        

        $department->save();

        session()->flash('success_message', 'Department has been saved!');
    }
    public function render()
    {
        $departments = Department::all();

        return view('livewire.admin.department-component', ['departments' => $departments ])->layout('layouts.base');
    }
}
