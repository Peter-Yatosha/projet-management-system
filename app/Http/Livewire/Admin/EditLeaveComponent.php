<?php

namespace App\Http\Livewire\Admin;

use App\Models\Leave;
use Livewire\Component;
use App\Models\Employee;

class EditLeaveComponent extends Component
{

    public $leave_type;
    public $status;
    public $duration;
    public $reason;
    public $member_id;
    public $end_date;
    public $start_date;
    public $leave_id;

    public function mount($l_id){
        $leave = Leave::where('id', $l_id)->first();
        $this->status = $this->status;
        $this->leave_type = $leave->leave_type;
        $this->start_date = $leave->start_date;
        $this->end_date = $leave->end_date;
        $this->status = $leave->status;
        $this->reason = $leave->reasons;
        $this->leave_id = $leave->id;

    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'start_date' => 'required',
            'end_date' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'reason' => 'required',
        ]);
    }

    public function editLeave(){

        $this->validate([
            'start_date' => 'required',
            'end_date' => 'required',
             'leave_type' => 'required',
             'status' => 'required',
             'reason' => 'required',
        ]);

        $leave = Leave::find($this->leave_id);
        $leave->employee_id = $this->member_id;
        $leave->leave_type = $this->leave_type;
        $leave->start_date = $this->start_date;
        $leave->end_date = $this->end_date;
        $leave->status = $this->status;
        $leave->reasons = $this->reason;
        $leave->save();

        session()->flash('success_message', 'Leave has been created successfuly!');
    }


    public function render()
    {
        $employees = Employee::all();

        return view('livewire.admin.edit-leave-component', ['employees' => $employees])->layout('layouts.base');
    }
}
