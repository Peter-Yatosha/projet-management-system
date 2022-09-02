<div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('success_message'))
                <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
            @endif
            <div class="card-title d-flex justify-content-between">
                <h4>Add Product</h4>
                <a href="{{ route('show.product') }}" class="btn btn-sm btn-gradient-info btn-rounded">All Product</a>
            </div>
            <form wire:submit.prevent="addProduct" enctype="multipart/form-data" class="form-horizontal row g3">
                <div class="form-group col-md-4">
                    <label for="name">Product Name</label>
                    <input type="text" wire:model="name" class="form-control form-control-sm" >

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="regular">Regular Price</label>
                    <input type="number" wire:model="regular_price" class="form-control form-control-sm" >

                    @error('regular_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group col-md-4">
                    <label for="sale">Sale Price</label>
                    <input type="number" wire:model="sale_price" class="form-control form-control-sm" >

                    @error('sale_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="qty">Quantity</label>
                    <input type="number" wire:model="quantity" class="form-control form-control-sm" >

                    @error('quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="VAT">Tax</label>
                    <input type="text" wire:model="tax" class="form-control form-control-sm" >

                    @error('tax')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="VAT">Status</label>
                    <select  wire:model="status" class="form-control form-control-sm">
                        <option value="select">Select</option>
                        <option value="instock">Instock</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>

                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="desc">Descriptions</label>
                    <textarea wire:model="descriptions" class="form-control form-control-sm" cols="30" rows="10"></textarea>

                    @error('descriptions')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>Upload Product</label>
                    <div class="input-group col-xs-12">
                      <input wire:model="files" type="file" class="form-control file-upload-info" placeholder="Upload files">
                    </div>
                    
                    {{--@if ($files)
                        <img src="{{$image->temporaryUrl()}}" width="120" />
                    @endif--}}
    
                    @error('files')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class=" form-group d-flex justify-content-between ">
                    <button type="submit" class="btn btn-gradient-primary me-2"><i class="mdi mdi-content-save"></i> Save</button>
                    <a href="{{route('show.product')}}" class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
