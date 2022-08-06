<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Employee;
use App\Models\User;
use Livewire\WithFileUploads;

class AddEmployeeComponent extends Component
{
    use WithFileUploads;

    public $employee_id;
    public $name;
    public $email;
    public $mobile;
    public $address;
    public $gander;
    public $user_id;
    public $country;
    public $image;
    public $status;
    public $role;

    public function mount(){
        $this->status = $this->status;
        $this->user_id = $this->employee_id;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'employee_id' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'gander' => 'required',
            //'department' => 'required',
            'country' => 'required',
            'role' => 'required',
            'image' => 'mimes:jpg,png',
        ]);
    }

    public function addEmployee()
    {
        $this->validate([
            'employee_id' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'gander' => 'required',
           // 'department' => 'required',
            'country' => 'required',
            'role' => 'required',
            'image' => 'mimes:jpg,png',
        ]);

        $employee = new Employee();
        $employee->user_id = $this->employee_id;
        $employee->name = $this->name;
        $employee->employee_id = $this->employee_id;
        $employee->email = $this->email;
        $employee->mobile = $this->mobile;
        $employee->gander = $this->gander;
       // $employee->department = $this->department;
        $employee->country = $this->country;
        $employee->status = $this->status;
        $employee->role = $this->role;
        $employee->address = $this->address;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('employee', $imageName);
        $employee->image = $imageName;
        $employee->save();

        session()->flash('success_message', 'Employee hsa been successfuly saved!');
    }
    public function render()
    {
       $users = User::where('utype', 'EMP')->get();
       $departments = Department::all();

        return view('livewire.admin.add-employee-component', [
            'users' => $users,
            'departments' => $departments,

            ])->layout('layouts.base');
    }
}
