@extends('Backend.layout.app')
@section('main-content')
  
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Book Create</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 ps-5 pe-5">
                    <form action="@if(isset($book)){{ route('book.update', $book->id) }} @else{{ route('book.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($book))
                            {{ method_field('PATCH') }}
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if(isset($book->title)) is-filled @endif">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="@if(isset($book)){{ $book->title }}@else{{ old('title') }}@endif" name="title" required minlength="5" maxlength="50" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check my-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input me-3" type="checkbox" value="1" name="is_featured" @if(isset($book)){{ $book->is_featured==1?'checked':'' }}@endif>
                                            is Featured
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" rows="5" name="summary" placeholder="Summary">@if(isset($book)){{ $book->summary }}@endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" rows="5" name="description" placeholder="Detail description">@if(isset($book)){{ $book->description }}@endif</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if(isset($book->price)) is-filled @endif">
                                    <label class="form-label">Price <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" value="@if(isset($book)){{ $book->price }}@else{{ old('price') }}@endif" name="price" required minlength="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if(isset($book->discount)) is-filled @endif">
                                    <label class="form-label">Discount Price</label>
                                    <input type="number" class="form-control" value="@if(isset($book)){{ $book->discount }}@else{{ old('discount') }}@endif" name="discount">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3 @if(isset($book->quantity)) is-filled @endif">
                                    <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" value="@if(isset($book)){{ $book->quantity }}@else{{ old('quantity') }}@endif" name="quantity" required minlength="1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fileinput fileinput-new my-3" data-provides="fileinput">
                                    <label class="form-label">Book Title Image <span class="text-danger">*</span></label>
                                    <div class="fileinput-new thumbnail img-raised">
                                        @if(isset($book))
                                            <img src="@if($book->image){{ asset('storage/uploads/book_images/'.$book->image) }}@endif" rel="nofollow" alt="image" style="width: 30%;">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <!-- <span class="fileinput-exists">Change</span> -->
                                            <input type="file" name="image" @if(!isset($book))required @else @endif />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fileinput fileinput-new my-3" data-provides="fileinput">
                                    <label class="form-label">Book PDF </label>
                                    <div class="fileinput-new thumbnail img-raised">
                                        @if(isset($book))
                                            @if($book->book_pdf)
                                                <img src="@if($book->image){{ asset('storage/uploads/book_images/'.$book->image) }}@endif" rel="nofollow" alt="image" style="width: 30%;">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select pdf</span>
                                            <!-- <span class="fileinput-exists">Change</span> -->
                                            <input type="file" name="book_pdf"/>
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
                                <label class="form-label">Condition</label>
                                <div class="dropdown select-group-outline my-3">
                                    <select name="condition" class="form-control">
                                        <option value="default" @if(isset($book)){{(($book->condition=='default')? 'selected':'')}}@endif>Default</option>
                                        <option value="latest" @if(isset($book)){{(($book->condition=='latest')? 'selected':'')}}@endif>Latest</option>
                                        <option value="on-demand" @if(isset($book)){{(($book->condition=='on-demand')? 'selected':'')}}@endif>On Demand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <div class="dropdown select-group-outline my-3">
                                    <select name="status" class="form-control">
                                        <option value="active" @if(isset($book)){{(($book->status=='active')? 'selected':'')}}@endif>Active</option>
                                        <option value="inactive"@if(isset($book)){{(($book->status=='inactive')? 'selected':'')}}@endif>In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="float-end">
                            <a href="{{URL::route('dashboard')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success btn-sm">@if(isset($book))Update Book @else Add Book @endif</button>
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
  