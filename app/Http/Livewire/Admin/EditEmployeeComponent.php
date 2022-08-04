<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditEmployeeComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-employee-component')->layout('layouts.base');
    }
}
