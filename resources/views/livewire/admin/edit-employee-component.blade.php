<div class="col-12  stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::has('success_message'))
            <div class="alert alert-success" role="alert" >{{Session::get('success_message')}}</div>
        @endif
        <div class="card-title d-flex justify-content-between mb-5">
            <h4>Edit Employee</h4>
            <a href="{{route('show.employee')}}" class="btn btn-success btn-rounded btn-sm "><i class="mdi mdi-account"></i> All Employees</a>
        </div>
        <form class="form-horizontal row g-3" wire:submit.prevent='updateEmployee' enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="employee_id">Employee Name</label>
                        <select  wire:model='employee_id' class="form-control form-control-sm">
                            <option value="">Select</option>
                          @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        </select>
                        @error('employee_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="form-group col-md-4">
                        <label for="email">Mobile</label>
                        <input type="text"  wire:model='mobile' class="form-control form-control-sm" placeholder="Mobile">
                    
                        @error('mobile')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
        
                    <div class="form-group col-md-4">
                        <label for="address">Address</label>
                        <input type="text"  wire:model='address' class="form-control" placeholder="Address">
                        
                        @error('address')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="role">Gander</label>
                        {{--<select name='gander' wire:model='gander' class="form-control form-control-sm">
                        <option value="">Select</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        </select>--}}
                        
                        <div class="form-check form-check-inline ">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                            <input class="form-check-input " wire:model='gander' type="radio"  id="inlineRadio1" value="male">
                            
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input ml-3" wire:model='gander' type="radio"  id="inlineRadio2" value="female">
                            <label class="form-check-label" for="inlineRadio2"> Female</label>
                          </div>

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
               
                    <div class="form-group col-md-3">
                            <label for="role">role</label>
                            <select  wire:model='role' class="form-control form-control-sm">
                                <option value="">Select</option>
                            <option value="it">IT</option>
                            <option value="developer">Web Developer</option>
                            </select>
                            @error('role')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="role">Country</label>
                        <select  wire:model='country' class="form-control form-control-sm">
                            <option value="">Select</option>
                            <option value="tanzania">Tanzania</option>
                            <option value="kenya">Kenya</option>
                        </select>
                        @error('country')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="status">Status</label>
                        <select  wire:model='status' class="form-control form-control-sm">
                        <option value="">Select</option>
                        <option value="active">Active</option>
                        <option value="deactive">Deactive</option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                 </div>

                    <div class="form-group col-md-6">
                        <label>File upload</label>
                        <input type="file"  wire:model='newimage'>
                        @if ($newimage)
                            <img src="{{$newimage->temporaryUrl()}}" width="120" />
                        @endif

                        @error('newimage')
                         <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
            <div class=" form-group d-flex justify-content-between ">
                <button type="submit" class="btn btn-gradient-primary me-2"><i class="mdi mdi-content-save"></i> Update</button>
                <a href="{{route('show.employee')}}" class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
            </div>
        </form>
      </div>
    </div>
  </div>