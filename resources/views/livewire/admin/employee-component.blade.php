<div>
    <div class="add-emp d-flex justify-content-end mb-3">
        <a href="{{route('add.employee')}}" class="btn btn-success btn-rounded btn-sm"><i class="mdi mdi-account-multiple-plus "></i> Create Employee<a>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="pull-right">All Employees</h4>
                </div>
                <table class="table  table-hover table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Emp_ID</th>
                            <th>Employee Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($employees->count() > 0)
                            @foreach ($employees as $employee)
                            <tr>
                                <td>#EMP-00{{$employee->user->id}}</td>
                                <td class="d-flex">
                                        <div class="nav-profile-image">
                                            <img src="{{asset('assets/images/employee')}}/{{$employee->image}}" alt="profile">
                                        </div>
                                    <div class="m-3">
                                        {{$employee->user->name}}
                                    </div>
                                </td>
                                <td>{{$employee->user->email}}</td>
                                <td>{{$employee->mobile}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->country}}</td>
                                <td>{{$employee->role}}</td>
                                <td>
                                    @if ($employee->status == 'active')
                                        <div class="badge badge-gradient-success">{{$employee->status}}</div>
                                    @elseif($employee->status == 'deactive')
                                        <div class="badge badge-gradient-danger">{{$employee->status}}</div>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('edit.employee', ['e_id' => $employee->id])}}" class="btn btn-gradient-primary btn-sm">
                                        <i class="mdi mdi-border-color"></i>
                                        Change
                                    </a>
                                    <a href="" onclick="confirm('Are you sure , you want to delete this employee?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteEmployee({{$employee->id}})" class="btn btn-gradient-danger btn-sm">
                                        <i class="mdi mdi-delete-forever"></i>
                                        Delete
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>
                                    <h5>No employee is available add one <a href="{{route('add.employee')}}"><i class="mdi mdi-plus menu-icon"></i>Create</a></h5>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
</div>  
