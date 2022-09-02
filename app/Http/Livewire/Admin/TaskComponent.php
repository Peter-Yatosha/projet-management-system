<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        session()->flash('success_message', 'Task has been deleted successfuly!');
    }
    public function render()
    {
        $tasks = Task::simplePaginate(5);

        return view('livewire.admin.task-component',[
            'tasks' => $tasks,
        ])->layout('layouts.base');
    }
}
