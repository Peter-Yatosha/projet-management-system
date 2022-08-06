<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AddClientComponent extends Component
{
    public function render()
    {
        $users = User::where('utype', 'USR')->get();
        return view('livewire.admin.add-client-component', ['users' => $users])->layout('layouts.base');
    }
}
