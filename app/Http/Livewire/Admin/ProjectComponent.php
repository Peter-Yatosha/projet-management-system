<?php

namespace App\Http\Livewire\Admin;

use App\Models\Projects;
use Livewire\Component;

class ProjectComponent extends Component
{
    public function deleteProject($id){
         $project = Projects::find($id);
         $project->delete();
         session()->flash('success_message', 'Project has been deleted successfuly!');
    }

    public function render()
    {
        $projects = Projects::all();

        return view('livewire.admin.project-component', ['projects'=>$projects])->layout('layouts.base');
    }
}
