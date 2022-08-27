<div>
   <div class="card">
    <div class="card-body">
        @if (Session::has('success_message'))
            <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
        @endif
        <div class="card-heading mb-5 d-flex justify-content-between">
            <h3>Add Client</h3>
            <a href="{{route('show.client')}}" class="btn btn-gradient-success btn-rounded btn-sm"><i class="mdi mdi-account"></i> All Clients</a>
        </div>
        <form wire:submit.prevent="addClient" enctype="multipart/form-data" class="form-horizontal row g-3">

            <div class="form-group col-md-3">
                <label>Client Name</label>
                <select wire:model="client_id" class="form-control form-control-sm">
                    <option value="">Select</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

                @error('client_id')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label>Salutation</label>
                <select wire:model='salutation' class="form-control form-control-sm">
                    <option value="">Select</option>
                    <option value="mr">Mr</option>
                    <option value="ms">Ms</option>
                    <option value="dr">Dr</option>
                    <option value="prof">Prof</option>
                    </select>

                @error('salutation')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>


            <div class="form-group col-md-6" >
                <label>Company Name</label>
                <input type="text" wire:model="company" class="form-control form-control-sm">

                @error('company')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4 ">
                <label>Gander</label>
                <div class="form-check form-check-inline ">
                    <label class="form-check-label">Male</label>
                    <input class="form-check-input " wire:model='gander' type="radio" name="gander" id="inlineRadio1" value="male"> 
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input ml-3" wire:model='gander' type="radio" name="gander" id="inlineRadio2" value="female">
                    <label class="form-check-label" for="inlineRadio2"> Female</label>
                  </div>

                @error('gander')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Mobile</label>
                <input type="text" wire:model="mobile" class="form-control form-control-sm">

                @error('mobile')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Address</label>
                <input type="text" wire:model="address" class="form-control form-control-sm">

                @error('address')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <hr class="solid"/>
            <h4 class="mt-3">Company Details</h4>

            <div class="form-group col-md-4">
                <label>Website</label>
                <input type="text" wire:model="website" class="form-control form-control-sm">

                @error('website')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>VAT/TAX No.</label>
                <input type="text" wire:model="vat_tax_no" class="form-control form-control-sm">

                @error('vat_tax_no')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Office Phone</label>
                <input type="text" wire:model="office_phone" class="form-control form-control-sm">

                @error('office_phone')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            

           <div class="form-group col-md-4">
                <label>Country</label>
                <select  wire:model='country' class="form-control form-control-sm">
                    <option value="">Select</option>
                    <option value="tanzania">Tanzania</option>
                    <option value="kenya">Kenya</option>
                    <option value="uganda">Uganda</option>
                    <option value="rwanda">Rwanda</option>
                    </select>

                @error('country')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>City</label>
                <input type="text" wire:model="city" class="form-control form-control-sm">

                @error('city')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label >Postalcode</label>
                <input type="text" wire:model="postalcode" class="form-control form-control-sm">

                @error('postalcode')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Descriptions</label>
                <textarea rows="3" wire:model="descriptions" class="form-control" ></textarea>

                @error('descriptions')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label>Shipping Address</label>
                <textarea rows="3" wire:model="shipping_address" class="form-control"></textarea>

                @error('shipping_address')
                    <div class="alert text-danger" role='alert'>{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label>File upload</label>
                <div class="input-group col-xs-12">
                  <input wire:model="image" type="file" class="form-control file-upload-success" placeholder="Upload Image">
                </div>
                
                @if ($image)
                    <img src="{{$image->temporaryUrl()}}" width="120" />
                @endif

                @error('image')
                 <div class="text-danger" role="alert">{{$message}}</div>
                @enderror
            </div>

            <div class=" form-group d-flex justify-content-between ">
                <button type="submit" class="btn btn-gradient-primary me-2"><i class="mdi mdi-content-save"></i> Submit</button>
                <a href="{{route('show.client')}}" class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
            </div>
        </form>
    </div>
   </div>
</div>