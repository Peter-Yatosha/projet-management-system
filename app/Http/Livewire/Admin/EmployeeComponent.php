<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EmployeeComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.employee-component')->layout('layouts.base');
    }
}
