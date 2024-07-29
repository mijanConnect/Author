@extends('Backend.layout.app')
@section('main-content')
  
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Post Create</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 ps-5 pe-5">
                    <form action="@if(isset($post)){{ route('post.update', $post->id) }} @else{{ route('post.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($post))
                            {{ method_field('PATCH') }}
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if(isset($post->title)) is-filled @endif">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="@if(isset($post)){{ $post->title }}@else{{ old('title') }}@endif" name="title" required minlength="5" maxlength="50" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" rows="5" name="summary" placeholder="Summary">@if(isset($post)){{ $post->summary }}@endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" rows="5" name="description" placeholder="Detail description">@if(isset($post)){{ $post->description }}@endif</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fileinput fileinput-new my-3" data-provides="fileinput">
                                    <label class="form-label">Post Image <span class="text-danger">*</span></label>
                                    <div class="fileinput-new thumbnail img-raised">
                                        @if(isset($post))
                                            <img src="@if($post->image){{ asset('storage/uploads/post_images/'.$post->image) }}@endif" rel="nofollow" alt="image" style="width: 30%;">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <!-- <span class="fileinput-exists">Change</span> -->
                                            <input type="file" name="image" @if(!isset($post))required @else @endif />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <style type="text/css">
                                .select-group-outline{
                                        background: none;
                                        border: 1px solid #d2d6da;
                                        border-radius: 0.375rem;
                                        border-top-left-radius: 0.375rem !important;
                                        border-bottom-left-radius: 0.375rem !important;
                                        padding: 0.0rem 0.75rem !important;
                                        line-height: 1.3 !important;
                                }
                            </style>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <div class="dropdown select-group-outline my-3">
                                    <select name="status" class="form-control">
                                        <option value="active" @if(isset($post)){{(($post->status=='active')? 'selected':'')}}@endif>Active</option>
                                        <option value="inactive"@if(isset($post)){{(($post->status=='inactive')? 'selected':'')}}@endif>In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="float-end">
                            <a href="{{URL::route('dashboard')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success btn-sm">@if(isset($post))Update Post @else Add Post @endif</button>
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
  