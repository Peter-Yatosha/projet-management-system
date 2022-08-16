<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddClientComponent extends Component
{
    use WithFileUploads;

    public $client_id;
    public $salutation;
    public $name;
    public $email;
    public $company;
    public $gander;
    public $mobile;
    public $address;
    public $website;
    public $vat_tax_no;
    public $office_phone;
    public $country;
    public $city;
    public $postalcode;
    public $descriptions;
    public $shipping_address;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields, [
            'client_id' => 'required',
            'salutation' => 'required',
            'name' => 'required',
            'email' => 'required',
            'company' => 'required',
            'gander' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'image' => 'mimes:jpg,png',
        ]);
    }

    public function addClient(){
        
        $this->validate([
            'client_id' => 'required',
            'salutation' => 'required',
            'name' => 'required',
            'email' => 'required',
            'company' => 'required',
            'gander' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'image' => 'mimes:jpg,png',
        ]);

        $client = new Client();

        $client->client_id = $this->client_id;
        $client->user_id = $this->client_id;
        $client->salutation = $this->salutation;
        $client->name = $this->name;
        $client->email = $this->email;
        $client->company = $this->company;
        $client->gander = $this->gander;
        $client->mobile = $this->mobile;
        $client->address = $this->address;
        $client->website = $this->website;
        $client->vat_tax_no = $this->vat_tax_no;
        $client->office_phone = $this->office_phone;
        $client->country = $this->country;
        $client->city = $this->city;
        $client->postalcode = $this->postalcode;
        $client->descriptions = $this->descriptions;
        $client->shipping_address = $this->shipping_address;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('client', $imageName);
        $client->image = $imageName;
        $client->save();

        session()->flash('success_message', 'Client has been created successfuly!');
    }

    public function render()
    {
        $users = User::where('utype', 'USR')->get();
        return view('livewire.admin.add-client-component', ['users' => $users])->layout('layouts.base');
    }
}
