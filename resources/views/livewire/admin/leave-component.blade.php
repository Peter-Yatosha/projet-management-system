<div>
    <div class="add-emp d-flex justify-content-end mb-3">
        <a href="{{route('add.leave')}}" class="btn btn-success btn-sm"><i class="mdi mdi-account-multiple-plus "></i> Create Leave<a>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="pull-right">All Leaves</h4>
                </div>
                <table class="table  table-hover table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Employee Name</th>
                            <th>Leave Type</th>
                            <th>Leave Status</th>
                            <th>Leave Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($leaves as $leave)
                            <tr>
                                <td class="d-flex">
                                    {{$leave->member}}
                                </td>
                                <td>
                                    @if ($leave->leave_type == 'casual')
                                        <div class="badge badge-gradient-info">{{$leave->leave_type}}</div>
                                    @elseif($leave->leave_type == 'sick')
                                        <div class="badge badge-gradient-danger">{{$leave->leave_type}}</div>
                                    @elseif($leave->leave_type == 'earned')
                                        <div class="badge badge-gradient-primary">{{$leave->leave_type}}</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($leave->status == 'approved')
                                        <div class="text-success">{{$leave->status}}</div>
                                    @elseif($leave->status == 'pending')
                                        <div class="text-danger">{{$leave->status}}</div>
                                    @endif
                                </td>
                                <td>{{$leave->duration}}</td>
                                <td class="d-flex">
                                    <a href="{{route('edit.leave', ['l_id' => $leave->id])}}" class="btn btn-gradient-primary btn-sm m-1">
                                        <i class="mdi mdi-border-color"></i>
                                        
                                    </a>
                                    <a href="" onclick="confirm('Are you sure , you want to delete this Leave?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteLeave({{$leave->id}})" class="btn btn-gradient-danger btn-sm m-1">
                                        <i class="mdi mdi-delete-forever"></i>
                                        
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>  


