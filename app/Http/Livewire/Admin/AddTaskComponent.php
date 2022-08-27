<?php

namespace App\Http\Livewire\Admin;

use App\Models\Employee;
use App\Models\Projects;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddTaskComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $task_name;
    public $project;
    public $assigned_to;
    public $due_date;
    public $start_date;
    public $status;
    public $descriptions;
    public $files;

    public function updated($fields){
        $this->validateOnly($fields, [
             'task_name' => 'required',
             'project' => 'required',
             'assigned_to' => 'required',
             'due_date' => 'required',
             'start_date' => 'required',
             'status' => 'required',
             'descriptions' => 'max:200',
             
        ]);
    }

    public function addTask(){
        $this->validate([
            'task_name' => 'required',
             'project' => 'required',
             'assigned_to' => 'required',
             'due_date' => 'required',
             'start_date' => 'required',
             'status' => 'required',
             'descriptions' => 'max:200',
             
        ]);

        $task = new Task();
         $task->task_name = $this->task_name;
         $task->project = $this->project;
         $task->assigned_to = $this->assigned_to;
         $task->due_date = $this->due_date;
         $task->start_date = $this->start_date;
         $task->status = $this->status;
         $task->descriptions = $this->descriptions;
         $task->files = $this->files;
        // $task->employee()->attach($this->assigned_to);
         $task->save();
         $task->employee()->attach($this->assigned_to);

         session()->flash('success_message', 'Task has been successfuly created!');
    }

    public function render()
    {
        $projects = Projects::all();
        $employees = Employee::where('status', 'active')->get();

        return view('livewire.admin.add-task-component', [
            'projects' => $projects,
            'employees' => $employees,
        ])->layout('layouts.base');
    }
}
