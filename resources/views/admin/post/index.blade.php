@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Post</h1>
            </div>
            <div class="pb-4">
                <a href="{{ route('post.create') }}" class="btn btn-icon icon-left btn-primary">
                    <i class="fas fa-plus"></i> Create Post
                </a>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Data Post</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Author</th>
                                                <th>Tag</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $post->name }}</td>
                                                <td>{{ $post->author }}</td>
                                                <td>{{ $post->tag }}</td>
                                                <td>{{ $post->category->name }}</td>
                                                <td><img style="width: 40px; height: 30px;" src="{{ asset('admin/'.$post->image_thumb) }}" /></td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary mr-2">Edit</a>
                                                        <form class="" style="padding-left: 2px;" method="post" action="{{ route('post.destroy', $post->id) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $no++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection