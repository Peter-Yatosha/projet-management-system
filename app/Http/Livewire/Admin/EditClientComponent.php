<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditClientComponent extends Component
{
    use WithFileUploads;

    public $client_id;
    public $salutation;
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
    public $newimage;
    public $cl_id;

    public function mount($c_id){
        $client = Client::where('id', $c_id)->first();
         $this->client_id = $client->client_id;
         $this->salutation = $client->salutation;
         $this->company = $client->company;
         $this->gander = $client->gander;
         $this->mobile = $client->mobile;
         $this->address = $client->address;
         $this->website = $client->website;
         $this->vat_tax_no = $client->vat_tax_no;
         $this->office_phone = $client->office_phone;
         $this->country = $client->country;
         $this->city = $client->city;
         $this->postalcode = $client->postalcode;
         $this->descriptions = $client->descriptions;
         $this->shipping_address = $client->shipping_address;
         $this->image = $client->image;
         $this->cl_id = $client->id;
    }
    

    public function updated($fields){
        $this->validateOnly($fields, [

            'salutation' => 'required',
            'company' => 'required',
            'gander' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'newimage' => 'mimes:jpg,png',
        ]);
    }

    public function updateClient(){
        
        $this->validate([
            
            'salutation' => 'required',
            'company' => 'required',
            'gander' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'newimage' => 'mimes:jpg,png',
        ]);

        $client = Client::find($this->cl_id);
        $client->user_id = $this->client_id;
        $client->salutation = $this->salutation;
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
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('client', $imageName);
            $client->image = $imageName;
        }
        $client->save();

        session()->flash('success_message', 'Client has been updated successfuly!');
    }

    public function render()
    {
        $users = User::where('utype', 'USR')->get();
        return view('livewire.admin.edit-client-component', ['users' => $users])->layout('layouts.base');
    }
}
