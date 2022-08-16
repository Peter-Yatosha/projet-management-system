<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;

class ClientComponent extends Component
{
    public function deleteClient($id){
        
        $client = Client::find($id);

        $client->delete();

        session()->flash('success_message', 'Client has been deleted successfuly!');
    }
    public function render()
    {
        $clients = Client::all();

        return view('livewire.admin.client-component', ['clients' => $clients])->layout('layouts.base');
    }
}
