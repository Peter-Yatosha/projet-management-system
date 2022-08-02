<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolePermissionComponent extends Component
{
    public $name;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required'
        ]);
    }
    public function createRoles()
    {
        $this->validate([
            'name' => 'required'
        ]);

        $roles = new Role();
        $roles->name = $this->name;
        $roles->save();
        session()->flash('success_message', 'Role has been created!');
    }
    public function render()
    {
        return view('livewire.admin.role-permission-component')->layout('layouts.base');
    }
}
