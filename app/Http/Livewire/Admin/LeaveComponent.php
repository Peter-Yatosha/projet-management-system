<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\Leave;
use Livewire\Component;

class LeaveComponent extends Component
{
    public function deleteLeave($id){
        $leave = Leave::find($id);

        $leave->delete();

        session()->flash('success_message', 'Leave has been deleted successfuly!');
    }
    public function render()
    {
        $leaves = Leave::all();
        $employees = Employee::all();

        return view('livewire.admin.leave-component', ['leaves' => $leaves, 'employees' => $employees])->layout('layouts.base');
    }
}
