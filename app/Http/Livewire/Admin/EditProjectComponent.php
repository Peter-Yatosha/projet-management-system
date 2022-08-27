<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Projects;
use App\Models\Department;
use Livewire\WithFileUploads;
use App\Models\ProjectCategory;

class EditProjectComponent extends Component
{
    use WithFileUploads;
 
    public $client_id;
    public $project_name;
    public $start_date;
    public $deadline;
    public $p_category;
    public $summery;
    public $notes;
    public $files;
    public $project_budget;
    public $hours_estimated;
    public $member;
    public $department;
    public $project_id;

    public function mount($pro_id){
        $project = Projects::where('id', $pro_id)->first();
         $this->client_id = $project->client_id;
         $this->project_name = $project->project_name;
         $this->start_date = $project->start_date;
         $this->deadline = $project->deadline;
         $this->p_category = $project->p_category;
         $this->summery = $project->summery;
         $this->notes = $project->notes;
         $this->files = $project->files;
         $this->project_budget = $project->project_budget;
         $this->hours_estimated = $project->hours_estimated;
         $this->member = $project->member;
         $this->department = $project->department;
         $this->project_id = $project->id;
    }
    public function updated($fields){
        $this->validateOnly($fields, [
            
                 'project_name' => 'required',
                 'start_date' => 'required|date',
                 'deadline' => 'required|date',
                 'project_budget' => 'required',
        ]);
    }

    public function editProject(){
        $this->validate([
                 'project_name' => 'required',
                 'start_date' => 'required|date',
                 'deadline' => 'required|date',
                 'project_budget' => 'required',
        ]);

        $project = Projects::find($this->project_id);
        $project->client_id = $this->client_id;
        $project->project_name = $this->project_name;
        $project->start_date = $this->start_date;
        $project->deadline = $this->deadline;
        $project->project_category = $this->p_category;
        $project->summery = $this->summery;
        $project->notes = $this->notes; 
        $project->files = $this->files;
        $project->project_budget = $this->project_budget;
        $project->hours_estimated = $this->hours_estimated;
        $project->members = $this->member;
        $project->department = $this->department;
        $project->save();

        session()->flash('success_message', 'Project has been successfuly updated!'); 
    }

    public function render()
    {
        $clients = Client::all();
        $project_category = ProjectCategory::all();
        $members = Employee::all();
        $departments = Department::all();

        return view('livewire.admin.edit-project-component', [
            'clients' => $clients,
            'project_category' => $project_category,
            'members' => $members,
            'departments' => $departments,
            
            ])->layout('layouts.base');
    }
}
