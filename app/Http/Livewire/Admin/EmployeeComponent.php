<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use Livewire\Component;

class EmployeeComponent extends Component
{
    public function deleteEmployee($id){
        $employee = Employee::find($id);

        $employee->delete();

        session()->flash('success_message', 'Employee has been deleted successfuly!');
    }

    public function render()
    {
        $employees = Employee::all();

        return view('livewire.admin.employee-component', ['employees' => $employees])->layout('layouts.base');
    }
}
