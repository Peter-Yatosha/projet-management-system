<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditTaskComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-task-component')->layout('layouts.base');
    }
}
