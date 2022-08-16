<div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('success_message'))
                <div class="alert alert-danger" role="alert">{{Session::get('success_message')}}</div>
            @endif
            <div class="card-title mb-4 d-flex justify-content-between">
                <h4>All Categories</h4>
                <a href="{{route('add.category')}}" class="btn btn-rounded btn-gradient-info btn-sm"><i class="mdi mdi-plus"></i> Project Category</a>
            </div>
            <table class="table table-hover table-sm ">
                <thead class="table-dark">
                    <tr>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('edit.category', ['cat_id' => $category->id])}}" class="btn btn-gradient-primary btn-sm m-1">
                                    <i class="mdi mdi-border-color"></i> 
                                    Change 
                                </a>
                                <a href="" onclick="confirm('Are you sure , you want to delete this Category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" class="btn btn-gradient-danger btn-sm m-1">
                                    <i class="mdi mdi-delete-forever"></i> 
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
            <div class="mt-3">{{$categories->links()}}</div>
        </div>
        
    </div>
</div>
