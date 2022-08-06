<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditClientComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-client-component')->layout('layouts.base');
    }
}
