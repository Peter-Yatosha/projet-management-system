<div>
    <div class="add-emp d-flex justify-content-end mb-3">
        <a href="{{route('add.project')}}" class="btn btn-success btn-rounded btn-sm"><i class="mdi mdi-briefcase-check "></i> Create Project<a>
    </div>
        <div class="card">
            <div class="card-body">
                @if (Session::has('success_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                @endif
                <div class="card-title">
                    <h4 class="pull-right">All Projects</h4>
                </div>
                <table class="table  table-hover table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Project Nmae</th>
                            <th>Project Category</th>
                            <th>Client</th>
                            <th>Starting Date</th>
                            <th>Deadline</th>
                            <th>Department</th>
                            <th>Members</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>
                                    {{$project->project_name}}
                                </td>
                                <td>
                                    {{$project->project_category}}
                                </td>
                                <td class="d-flex">
                                    <div class="nav-profile-image">
                                        <img src="{{asset('assets/images/client')}}/{{$project->client->image}}" alt="profile">
                                    </div>
                                    <div class="m-3">
                                        {{$project->client->name}}
                                    </div>
                                </td>
                                <td>{{$project->start_date}}</td>
                                <td>{{$project->deadline}}</td>
                                <td>{{$project->department}}</td>
                                <td>{{$project->members}}</td>
                                <td class="d-flex">
                                    <a href="{{route('edit.project', ['pro_id' => $project->id])}}" class="btn btn-gradient-primary btn-sm m-1">
                                        <i class="mdi mdi-border-color"></i>
                                    </a>
                                    <a href="" onclick="confirm('Are you sure , you want to delete this Leave?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteProject({{$project->id}})" class="btn btn-gradient-danger btn-sm m-1">
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


