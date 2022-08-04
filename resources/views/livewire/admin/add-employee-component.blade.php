<div class="col-12  stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::has('success_message'))
            <div class="alert alert-success" role="alert" >{{Session::get('success_message')}}</div>
        @endif
        <div class="card-title d-flex justify-content-between mb-5">
            <h4>Employee</h4>
            <a href="{{route('show.employee')}}" class="btn btn-success btn-sm "><i class="mdi mdi-account"></i> All Employees</a>
        </div>
        <form class="form-horizontal" wire:submit.prevent='addEmployee' enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="employee_id">Employee_ID</label>
                        <select name='employee_id' wire:model=employee_id class="form-control form-control-sm">
                          @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->id}}</option>
                          @endforeach
                        </select>
                        @error('employee_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="form-group">
                        <label for="name">Employee Name</label>
                        
                        <input type="text" name='name' wire:model='name' class="form-control"  placeholder="Name">

                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
              
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name='email' wire:model='email' class="form-control"  placeholder="Email">

                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Mobile</label>
                        <input type="text" name='mobile' wire:model='mobile' class="form-control" placeholder="Mobile">
                    
                        @error('mobile')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name='address' wire:model='address' class="form-control" placeholder="Address">
                        
                        @error('address')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="role">Gander</label>
                        <select name='gander' wire:model='gander' class="form-control form-control-sm">
                        <option value="male">male</option>
                        <option value="female">female</option>
                        </select>

                        @error('gander')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{--<div class="form-group">
                        <label for="department">Department</label>
                        <select name='department' wire:model=department class="form-control form-control-sm">
                          @foreach ($departments as $department)
                            <option value="{{$department->name}}">{{$department->name}}</option>
                          @endforeach
                        </select>

                        @error('department')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div> --}}
               
                    <div class="form-group">
                            <label for="role">role</label>
                            <select name='role' wire:model='role' class="form-control form-control-sm">
                            <option value="it">IT</option>
                            <option value="developer">Web Developer</option>
                            </select>
                            @error('role')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="role">Country</label>
                        <select name='country' wire:model='country' class="form-control form-control-sm">
                            <option value="tanzania">Tanzania</option>
                            <option value="kenya">Kenya</option>
                        </select>
                        @error('country')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
               
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" wire:model='image'>
                        @if ($image)
                            <img src="{{$image->temporaryUrl()}}" width="120" />
                        @endif

                        @error('image')
                         <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
            <div class=" form-group d-flex justify-content-between ">
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>