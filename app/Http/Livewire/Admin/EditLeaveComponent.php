<?php

namespace App\Http\Livewire\Admin;

use App\Models\Leave;
use Livewire\Component;
use App\Models\Employee;

class EditLeaveComponent extends Component
{
    public $member;
    public $leave_type;
    public $status;
    public $duration;
    public $reason;
    public $member_id;
    public $leave_id;

    public function mount($l_id){
        $leave = Leave::where('id', $l_id)->first();
        $this->status = $this->status;
         $this->member = $leave->member;
        $this->leave_type = $leave->leave_type;
        $this->status = $leave->status;
        $this->duration = $leave->duration;
        $this->reason = $leave->reasons;
        $this->leave_id = $leave->id;

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

    public function editLeave(){

        $this->validate([
            'member' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'duration' => 'required',
             'reason' => 'required',
        ]);

        $leave = Leave::find($this->leave_id);
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

        return view('livewire.admin.edit-leave-component', ['members' => $members])->layout('layouts.base');
    }
}
