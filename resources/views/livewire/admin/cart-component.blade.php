<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Order Summary</b></h4></div>
                    @if (Cart::count() > 0)
                    <div class="col align-self-center text-right text-muted">{{ Cart::count() }} items</div>
                    @endif
                </div>
            </div>    
            @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        {{-- <divclass="col-2"><imgclass="img-fluid"src="https://i.imgur.com/1GrakTl.jpg"></div> --}}
                        <div class="col">
                            <h4 class="row text-primary mb-2">{{ $item->model->name }}</h4>
                            <div class="row">{{ $item->model->descriptions }}</div>
                        </div>
                        <div class="col">
                           
                        </div>
                        <div class="col">Tshs {{ $item->subtotal }} <a href="" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="mdi mdi-close-circle-outline"></i></a></div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="col-md-4 summary bg-gradient-info text-white">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">Subtotal</div>
                <div class="col text-right">Tshs {{ Cart::subtotal() }}</div>
            </div>
            <div class="row mt-2">
                <div class="col" style="padding-left:0;">Tax</div>
                <div class="col text-right">Tshs {{ Cart::tax() }}</div>
            </div>
            <form>
                <p>SHIPPING</p>
                <select><option class="text-muted">Standard-Delivery- &euro;0</option></select>
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">Tshs {{ Cart::total() }}</div>
            </div>
            <a href="" class="btn btn-gradient-success btn-sm form-control">CHECKOUT</a>
            <a href="" wire:click.prevent="destroyAll" class="btn btn-sm btn-gradient-danger form-control mt-3">Clear Cart</a>
        </div>
    </div>
    
</div>
