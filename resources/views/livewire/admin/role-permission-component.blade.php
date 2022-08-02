<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('success_message'))
                        <div class="alert alert-success mb-2" role="alert">{{Session::get('success_message')}}</div>
                     @endif
                    <h4>Create Role</h4>
                    <form class="form-horizontal" action="" wire:submit.prevent='createRoles'>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Role name" aria-label="name" wire:model='name'>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-gradient-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h4>Assign Role</h4>
                    <div class="form-group">
                        <label>Permision</label>
                        <input type="text" name="name" class="form-control" placeholder="Role name" aria-label="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">select Role</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                          <option>Admin</option>
                          <option>Client</option>
                          <option>Employee</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <button class="btn btn-gradient-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Roles</h4>
                </div>
            </div>
        </div>
    </div>
</div>
