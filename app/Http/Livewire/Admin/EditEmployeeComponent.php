<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class EditEmployeeComponent extends Component
{
    use WithFileUploads;

    public $employee_id;
    public $mobile;
    public $address;
    public $gander;
    public $country;
    public $newimage;
    public $image;
    public $status;
    public $role;
    public $emp_id;
    

    public function mount($e_id){
        $employee = Employee::where('id',$e_id)->first();
        $this->mobile = $employee->mobile;
        $this->address = $employee->address;
        $this->gander = $employee->gander;
        $this->user_id = $employee->employee_id;
        $this->country = $employee->country;
        $this->image = $employee->image;
        $this->status = $employee->status;
        $this->role = $employee->role;
        $this->emp_id = $employee->id;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'employee_id' => 'required',
            'mobile' => 'required',
            'gander' => 'required',
            //'department' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);
    }

    public function updateEmployee()
    {
        $this->validate([
            'employee_id' => 'required',
            'mobile' => 'required',
            'gander' => 'required',
           // 'department' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);

        $employee = Employee::find($this->emp_id);
        $employee->user_id = $this->employee_id;
        $employee->mobile = $this->mobile;
        $employee->gander = $this->gander;
       // $employee->department = $this->department;
        $employee->country = $this->country;
        $employee->status = $this->status;
        $employee->role = $this->role;
        $employee->address = $this->address;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('employee', $imageName);
            $employee->image = $imageName;
        }
        $employee->save();

        session()->flash('success_message', 'Employee hsa been successfuly updated!');
    }
    public function render()
    {
        $users = User::all();

        return view('livewire.admin.edit-employee-component', ['users' => $users])->layout('layouts.base');
    }
}
