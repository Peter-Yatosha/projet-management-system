<div>
    <div class="add-emp d-flex justify-content-end mb-3">
        <a href="{{route('add.client')}}" class="btn btn-success btn-rounded btn-sm"><i class="mdi mdi-account-multiple-plus "></i> Create Client<a>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="pull-right">All Clients</h4>
                </div>
                <table class="table  table-hover table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Client_ID</th>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($clients->count() > 0)
                            @foreach ($clients as $client)
                            <tr>
                                <td>#C-00{{$client->user->id}}</td>
                                <td class="d-flex">
                                        <div class="nav-profile-image">
                                            <img src="{{asset('assets/images/client')}}/{{$client->image}}" alt="profile">
                                        </div>
                                    <div class="m-3">
                                        {{$client->user->name}}
                                    </div>
                                </td>
                                <td>{{$client->user->email}}</td>
                                <td>{{$client->mobile}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->country}}</td>
                                <td>{{$client->city}}</td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('edit.client', ['c_id' => $client->id])}}" class="btn btn-gradient-primary btn-sm">
                                        <i class="mdi mdi-border-color"></i>
                                        Change
                                    </a>
                                    <a href="" onclick="confirm('Are you sure , you want to delete this client?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteClient({{$client->id}})" class="btn btn-gradient-danger btn-sm">
                                        <i class="mdi mdi-delete-forever"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>
                                    <h5>No Client is available add one <a href="{{route('add.employee')}}"><i class="mdi mdi-plus menu-icon"></i>Create</a></h5>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
</div>  

