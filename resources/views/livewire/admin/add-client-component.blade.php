<div>
   <h3>Add Client</h3>
   <div class="card">
    <div class="card-body">
        <form enctype="multipart/form-data" class="form-horizontal row g-3">

            <div class="form-group col-md-3">
                <label for="client_id">Client ID</label>
                <select wire:model="client_id" class="form-control form-control-sm">
                    <option value="">Select</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->id}}</option>
                    @endforeach
                </select>

                @error('client_id')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label for="salute">Salutation</label>
                <input type="text" wire:model="salutation" class="form-control form-control-sm">

                @error('salutation')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="client_name">Client Name</label>
                <input type="text" wire:model="name" class="form-control form-control-sm">

                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" wire:model="email" class="form-control form-control-sm">

                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6" >
                <label for="company">Company Name</label>
                <input type="text" wire:model="company" class="form-control form-control-sm">

                @error('company')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4 ">
                <label for="role">Gander</label>
                <div class="form-check form-check-inline ">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
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
                <label for="mobile">Mobile</label>
                <input type="text" wire:model="mobile" class="form-control form-control-sm">

                @error('mobile')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="address">Address</label>
                <input type="text" wire:model="address" class="form-control form-control-sm">

                @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <hr class="solid"/>
            <h4 class="mt-3">Company Details</h4>

            <div class="form-group col-md-4">
                <label for="website">Website</label>
                <input type="text" wire:model="website" class="form-control form-control-sm">

                @error('website')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="vat_tax_no">VAT/TAX No.</label>
                <input type="text" wire:model="vat_tax_no" class="form-control form-control-sm">

                @error('vat_tax_no')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="mobile">Office Phone</label>
                <input type="text" wire:model="office_phone" class="form-control form-control-sm">

                @error('office_phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            

           <div class="form-group col-md-4">
                <label for="country">Country</label>
                <input type="text" wire:model="country" class="form-control form-control-sm">

                @error('country')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" wire:model="city" class="form-control form-control-sm">

                @error('city')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="postalcode">Postalcode</label>
                <input type="text" wire:model="postalcode" class="form-control form-control-sm">

                @error('postalcode')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="descriptions">Descriptions</label>
                <textarea rows="3" wire:model="descriptions" class="form-control" ></textarea>

                @error('descriptions')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="shipping_address">Shipping Address</label>
                <textarea rows="3" wire:model="shipping_address" class="form-control"></textarea>

                @error('shipping_address')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                        
                <input type="file" name="image" wire:model='image'>
               {{-- @if ($image)
                    <img src="{{$image->temporaryUrl()}}" width="120" />
                @endif--}}

                @error('image')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class=" form-group d-flex justify-content-between ">
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <a href="{{route('show.client')}}" class="btn btn-gradient-danger">Cancel</a>
            </div>
        </form>
    </div>
   </div>
</div>
