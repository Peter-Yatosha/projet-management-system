<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card row g-3">
            <div class="card-body">
                @if (Session::has('success_message'))
                    <p class="alert alert-success" role="alert">{{Session::get('success_message')}}</p>
                @endif
                <div class="card-head d-flex justify-content-between mb-4">
                    <div class="h4">Create Category</div>
                </div>
                <form wire:submit.prevent="addCategory">
                    <div class="form-group mb-4">
                        <label>Category Name</label>
                        <div class="input-group col-xs-12">
                          <input type="text" wire:model="category" class="form-control form-control-sm" placeholder="category name">
                          <span class="input-group-append">
                            <button class="btn btn-gradient-success" type="submit">Save</button>
                          </span>
                        </div>
                      </div>
                      <a href="{{route('show.category')}}" class="btn btn-gradient-danger btn-sm btn-rounded"><i class=""></i> Cancel</a>
                </form>
            </div>
           </div>
    </div>
    <div class="col-md-3"></div>
</div>
