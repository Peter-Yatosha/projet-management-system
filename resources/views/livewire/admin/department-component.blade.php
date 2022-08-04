<div>
   <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (Session::has('success_message'))
                    <div class="alert alert-success">{{Session::get('success_message')}}</div>
                @endif
                <form class="form-horizontal" wire:submit.prevent="createDepartment">
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control form-control-sm" wire:model="name"/>
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-3">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">  
            <div class="card-body">
                <div class="card-title">Department</div>
                    <table class="table table-striped">
                       <thead>
                        <tr>
                            <th>Department</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                       </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->created_at}}</td>
                                    <td>edit delete</td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
   </div>
</div>
