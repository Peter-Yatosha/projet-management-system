<div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('success_message'))
                <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
            @endif
            <div class="card-title d-flex justify-content-between mb-4">
                <h5>Add Task</h5>
                <a href="{{ route('show.task') }}" class="btn btn-sm btn-rounded btn-gradient-info"><i class="mdi mdi-chart-bubble"></i> All Task</a>
            </div>
            <form wire:submit.prevent="addTask" enctype="multipart/form-data" class="form-horizontal row g3">
                <div class="form-group col-md-4">
                    <label>Task Title</label>
                    <input type="text" class="form-control form-control-sm" wire:model="task_name">

                    @error('task_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Project</label>
                    <select wire:model="project" class="form-control form-control-sm">
                        <option value="">Select</option>
                        @forelse ($projects as $project)
                            <option value="{{ $project->project_name }}">{{ $project->project_name }}</option>
                        @empty
                            <div class="text-danger">
                                <p>No list availabe</p>
                            </div>
                        @endforelse
                    </select>

                    @error('project')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Assigned To</label>
                    <select wire:model="assigned_to" class="form-control form-control-sm">
                        <option value="">Select</option>
                        @forelse ($employees as $employee)
                            <option value="{{ $employee->user->id }}">{{ $employee->user->name }}</option>
                        @empty
                        <div class="text-danger">
                            <p>No list availabe</p>
                        </div>
                        @endforelse
                    </select>

                    @error('assigned_to')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Start Date</label>
                    <input type="date" id="datetimes" class="form-control form-control-sm" wire:model="start_date">

                    @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Due Date</label>
                    <input type="date" id="datetimes" class="form-control form-control-sm" wire:model="due_date">

                    @error('due_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label>Task Status</label>
                    <select wire:model="status" class="form-control form-control-sm">
                        <option value="">Select</option>
                        <option value="to_do">To Do</option>
                        <option value="complete">Complete</option>
                        <option value="incomplete">Incoplete</option>
                        <option value="doing">Doing</option>
                    </select>

                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Descriptions</label>
                    <textarea cols="30" rows="10" class="form-control form-control-sm" wire:model="descriptions"></textarea>

                    @error('descriptions')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label>File upload</label>
                    <div class="input-group col-xs-12">
                      <input wire:model="files" type="file" class="form-control file-upload-info" placeholder="Upload files">
                    </div>
                    
                    {{--@if ($files)
                        <img src="{{$image->temporaryUrl()}}" width="120" />
                    @endif--}}
    
                    @error('files')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-gradient-info"><i class="mdi mdi-content-save"></i> Save</button>
                    <a href="{{route('show.task')}}"  class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
