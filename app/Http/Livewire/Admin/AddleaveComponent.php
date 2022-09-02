<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\Leave;
use App\Models\User;
use Livewire\Component;

class AddleaveComponent extends Component
{
    public $leave_type;
    public $status;
    public $start_date;
    public $end_date;
    public $reason;
    public $employee_name;
    public $assign;

    public function mount(){
        $this->status = $this->status;

    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'employee_name' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'start_date' => 'required',
             'end_date' => 'required',
             'reason' => 'required',
        ]);
    }

    public function addLeave(){

        $this->validate([
            'employee_name' => 'required',
            'leave_type' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
        ]);

        $leave = new Leave();
        $leave->employee_name = $this->employee_name;
        $leave->leave_type = $this->leave_type;
        $leave->status = $this->status;
        $leave->start_date = $this->start_date;
        $leave->end_date = $this->end_date;
        $leave->reasons = $this->reason;
        $leave->save();
        $leave->employee()->attach($this->employee_name);

        session()->flash('success_message', 'Leave has been created successfuly!');
    }


    public function render()
    {
        $employees = Employee::all();

        return view('livewire.admin.addleave-component', ['employees' => $employees])->layout('layouts.base');
    }
}
