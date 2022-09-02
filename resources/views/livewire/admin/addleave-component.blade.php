<div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('success_message'))
                <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
            @endif
                <div class="d-flex justify-content-between mb-5">
                    <h4>Add Leave</h4>
                    <a href="{{route('show.leaves')}}" class="btn btn-gradient-success btn-rounded btn-sm"><i class="mdi mdi-airplane-takeoff"></i> All Leaves</a>
                </div>
            <form wire:submit.prevent="addLeave" class="row g-3">
                <div class="form-group col-md-4">
                    <label>Choose Member Name</label>
                    <select wire:model="employee_name" class="form-control form-control-sm">
                        <option value="">Select Menber</option>
                        @forelse ($employees as $employee)
                            <option value="{{$employee->id}}">
                                {{$employee->user->name}}
                            </option>
                        @empty
                            <option value="">No member found</option>
                        @endforelse
                    </select>

                    @error('member_id')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="leave_type">Leave Type</label>
                    <select wire:model="leave_type" class="form-control form-control-sm">
                        <option value="">Select Leave Type</option>
                        <option value="casual">Casual</option>
                        <option value="sick">Sick</option>
                        <option value="earned">Earned</option>
                    </select>

                    @error('leave_type')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="status">Status</label>
                    <select wire:model="status" class="form-control form-control-sm">
                        <option value="">Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="duration">Start Date</label>
                    <input type="date" wire:model="start_date" id="datetimes" placeholder="start from..." class="form-control form-control-sm">
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="duration">End Date</label>
                    <input type="date" wire:model="end_date" id="datetimes" placeholder="ends to from..." class="form-control form-control-sm">

                    @error('duration')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="reason">Reasons for Absence</label>
                    <textarea wire:model="reason"  cols="30" rows="10" class="form-control"></textarea>

                    @error('reason')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-gradient-primary"><i class="mdi mdi-content-save"></i> Save</button>
                    <a href="{{route('show.leaves')}}"  class="btn btn-gradient-danger"><i class="mdi mdi-close-circle-outline"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

