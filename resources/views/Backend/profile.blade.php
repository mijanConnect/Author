@extends('Backend.layout.app')
@section('main-content')
  
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Profile Page</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 ps-5 pe-5">
                    <form action="{{ route('profile_update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if($admin->name) is-filled @endif">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $admin->name }}" name="name" required minlength="5" maxlength="50" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if($admin->email) is-filled @endif">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ $admin->email }}" name="email" required maxlength="50">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img src="@if($admin->image){{ asset('storage/uploads/profile_images/'.$admin->image) }}@else{{ asset('assets/img/avatar.png') }}@endif" rel="nofollow" alt="image" style="border-radius:50%; width: 30%;">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image"/>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-end">
                            <a href="{{URL::route('dashboard')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-scripts')
@endpush  
  