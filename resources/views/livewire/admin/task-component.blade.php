<div>
    <div class="add-emp d-flex justify-content-end mb-3">
        <a href="{{route('add.task')}}" class="btn btn-gradient-info btn-rounded btn-sm"><i class="mdi mdi-plus "></i> Task<a>
    </div>
        <div class="card">
            <div class="card-body">
                @if (Session::has('success_message'))
                    <div class="alert alert-danger" role="alert">{{Session::get('success_message')}}</div>
                @endif
                <div class="card-title">
                    <h4 class="pull-right">All Tasks</h4>
                </div>
                <table class="table  table-hover table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Task Name</th>
                            <th>Project</th>
                            <th>Starting Date</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    {{$task->task_name}}
                                </td>
                                <td>
                                    {{$task->project}}
                                </td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->due_date}}</td>
                                <td>{{$task->status}}</td>
                                <td class="d-flex">
                                    <a href="{{route('edit.task', ['t_id' => $task->id])}}" class="btn btn-gradient-primary btn-sm m-1">
                                        <i class="mdi mdi-border-color"></i>
                                    </a>
                                    <a href="" onclick="confirm('Are you sure , you want to delete this Task?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteTask({{$task->id}})" class="btn btn-gradient-danger btn-sm m-1">
                                        <i class="mdi mdi-delete-forever"></i>
                                        
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{--@foreach ($tasks->employee as $em)
                    <div>{{ $em->mobile }}</div>
                @endforeach--}}
            </div>
        </div>
</div>  



