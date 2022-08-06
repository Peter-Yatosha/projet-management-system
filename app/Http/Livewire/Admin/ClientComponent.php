<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ClientComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.client-component')->layout('layouts.base');
    }
}
