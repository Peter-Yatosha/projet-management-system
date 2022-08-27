<div>
   <div class="card">
    <div class="card-body">
        @if (Session::has('success_message'))
            <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
        @endif
        <div class="card-title d-flex justify-content-between">
            <h4>Add Project</h4>
            <a href="{{route('show.project')}}" class="btn btn-rounded btn-sm btn-gradient-info"><i class="mdi mdi-briefcase-check"></i> All Projects</a>            
        </div>
        <form enctype="multipart/form-data" wire:submit.prevent="addProject" class="form-horizontal row g-3">
            <div class="form-group col-md-6">
                <label for="client">Client</label>
                <select wire:model='client_id' class="form-control form-control-sm" >
                    <option value="">Selecct Client</option>
                    @forelse ($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}}</option>
                    @empty
                        <option value="">No list available</option>
                    @endforelse
                </select>

                @error('client_id')
                    <div class="text-danger" role="alert">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="name">Project Name</label>
                <input type="text" wire:model="project_name" class="form-control form-control-sm">

                @error('project_name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="s_date">Start Date</label>
                <input type="date" wire:model="start_date" id="datetimes" class="form-control form-control-sm" >

                @error('start_date')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="deadline">Deadline</label>
                <input type="date" wire:model="deadline" id="datetimes" class="form-control form-control-sm" >

                @error('deadline')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="p_category">Project Category</label>
                <select wire:model="p_category" class="form-control form-control-sm">
                    <option value="">Select</option>
                    @forelse ($project_category as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @empty
                        <option value="">No list available</option>
                    @endforelse
                </select>

                @error('p_category')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="summery">Project Summery</label>
                <textarea cols="30" rows="10" wire:model="summery" class="form-control" ></textarea>

                @error('summery')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="notes">Project Notes</label>
                <textarea cols="30" rows="10" wire:model="notes" class="form-control" ></textarea>

                @error('notes')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>File upload</label>
                <div class="input-group col-xs-12">
                  <input wire:model="files" type="file" class="form-control file-upload-success" placeholder="Upload files">
                </div>
                
                {{--@if ($files)
                    <img src="{{$image->temporaryUrl()}}" width="120" />
                @endif--}}

                @error('files')
                 <div class="text-danger" role="alert">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="budget">Project Budget</label>
                <input type="text" wire:model="project_budget" class="form-control form-control-sm" >

                @error('project_budget')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="hours">Hours Estimated</label>
                <input type="text" wire:model="hours_estimated" class="form-control form-control-sm" >

                @error('hours_estimated')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="member">Project Member</label>
                <select wire:model="member" class="form-control form-control-sm" >
                    <option value="">Select</option>
                    @forelse ($members as $member)
                        <option value="{{$member->name}}">{{$member->name}}</option>
                    @empty
                        <option value="">No list available</option>
                    @endforelse
                </select>

                @error('member')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="department">Department</label>
                <select wire:model="department" class="form-control form-control-sm" >
                    <option value="">Select</option>
                    @forelse ($departments as $department)
                        <option value="{{$department->name}}">{{$department->name}}</option>
                    @empty
                        <option value="">No list available</option>
                    @endforelse
                </select>

                @error('department')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-gradient-primary"><i class="mdi mdi-content-save"></i> Save</button>
                <a href="{{route('show.project')}}"  class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
            </div>
        </form>
    </div>
   </div>
</div>
