<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Projects;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class EditTaskComponent extends Component
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
    public $task_id;

    public function mount($t_id){
        $task = Task::find($t_id)->first();
         $this->task_name = $task->task_name;
         $this->project = $task->project;
         $this->assigned_to = $task->assigned_to;
         $this->due_date = $task->due_date;
         $this->start_date = $task->start_date;
         $this->status = $task->status;
         $this->descriptions = $task->descriptions;
         $this->files = $task->files;
    }

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

    public function editTask(){
        $this->validate([
            'task_name' => 'required',
             'project' => 'required',
             'assigned_to' => 'required',
             'due_date' => 'required',
             'start_date' => 'required',
             'status' => 'required',
             'descriptions' => 'max:200',
             
        ]);

        $task = Task::where('id', $this->task_id);
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

         session()->flash('success_message', 'Task has been successfuly updated!');
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
