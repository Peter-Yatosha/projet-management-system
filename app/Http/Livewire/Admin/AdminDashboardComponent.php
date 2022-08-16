<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use App\Models\Employee;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $employeeCount = Employee::where('status', 'active')->get();
        $clientCount = Client::all();

        return view('livewire.admin.admin-dashboard-component', [
            'employeeCount' => $employeeCount,
            'clientCount' => $clientCount,
            
            ])->layout('layouts.base');
    }
}
