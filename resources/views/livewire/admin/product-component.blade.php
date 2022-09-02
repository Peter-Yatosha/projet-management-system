<div>
    <div class="d-flex justify-content-between">
        <h4>All Products</h4>
        <a href="{{ route('add.product') }}" class="btn btn-sm  btn-gradient-info"><i class="mdi mdi-plus"></i> Product</a>
    </div>
    <div class="card mt-3 mb-4">
        <div class="card-body">
            <h4>Hosting Services</h4>
        </div>
    </div>
    <div class="row">

        <ul class="form-horizontal row g-3 equal-container">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="card equal-elem m-2">
                    <div class="card-body">
                        <h4 class="text-center">{{ $product->name }}</h4>
                        <p class="text-center">{{ $product->descriptions }}</p>
                        <a href="" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" class="btn btn-rounded btn-gradient-info form-control">Order Now</a>
                    </div>
                </div>
            </div>  
            @endforeach
        </ul>

    </div>
</div>
