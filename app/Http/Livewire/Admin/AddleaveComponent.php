<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\Leave;
use Livewire\Component;

class AddleaveComponent extends Component
{
    public $member;
    public $leave_type;
    public $status;
    public $duration;
    public $reason;
    public $member_id;

    public function mount(){
        $this->status = $this->status;

    }

    public function updated($fields){
        $this->validateOnly($fields, [
             'member' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'duration' => 'required',
             'reason' => 'required',
        ]);
    }

    public function addLeave(){

        $this->validate([
            'member' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'duration' => 'required',
             'reason' => 'required',
        ]);

        $leave = new Leave();
        $leave->employee_id = $this->member_id;
        $leave->member = $this->member;
        $leave->leave_type = $this->leave_type;
        $leave->status = $this->status;
        $leave->duration = $this->duration;
        $leave->reasons = $this->reason;
        $leave->save();

        session()->flash('success_message', 'Leave has been created successfuly!');
    }


    public function render()
    {
        $members = Employee::all();

        return view('livewire.admin.addleave-component', ['members' => $members])->layout('layouts.base');
    }
}
