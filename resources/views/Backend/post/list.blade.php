@extends('Backend.layout.app')
@section('main-content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3 d-inline">Post Lists</h6>
                            <a class="btn btn-info btn-sm float-end me-3" href="{{ URL::route('post.create') }}"></i> Add New Post</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Summary</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td class="align-middle text-center">
                                                <img src="@if($post->image){{ asset('storage/uploads/post_images/'.$post->image) }}@else @endif" rel="nofollow" alt="image" style="width: 50px;">
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs text-secondary mb-0">{{ $post->title }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs text-secondary mb-0">{{ $post->summary }}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $post->status }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('post.edit', $post->id) }}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                                <form method="POST" action="{{ route('post.destroy', $post->id ) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" title="Delete">
                                                        <i class="material-icons text-sm me-2">delete</i>Delete
                                                    </button>
                                                </form>                                               
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')
@endpush  