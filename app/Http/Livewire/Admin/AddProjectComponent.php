<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\ProjectCategory;
use App\Models\Projects;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddProjectComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
 
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

    public function updated($fields){
        $this->validateOnly($fields, [
            
                 'project_name' => 'required',
                 'start_date' => 'required|date',
                 'deadline' => 'required|date',
                 'project_budget' => 'required',
        ]);
    }

    public function addProject(){
        $this->validate([
                 'project_name' => 'required',
                 'start_date' => 'required|date',
                 'deadline' => 'required|date',
                 'project_budget' => 'required',
        ]);

        $project = new Projects();
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

        session()->flash('success_message', 'Project has been successfuly created!'); 
    }

    public function render()
    {
        $clients = Client::all();
        $project_category = ProjectCategory::all();
        $members = Employee::all();
        $departments = Department::all();

        return view('livewire.admin.add-project-component', [
            'clients' => $clients,
            'project_category' => $project_category,
            'members' =>$members,
            'departments' => $departments,
            ])->layout('layouts.base');
    }
}
