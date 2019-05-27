@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Post</h1>
            </div>
            <div class="pb-4">
                <a href="{{ route('post.create') }}" class="btn btn-primary">Add Post</a>
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
                                                <th>Image Thumb</th>
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
                                                <td>{{ $post->category_id }}</td>
                                                <td>{{ $post->image_thumb }}</td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="#" class="btn btn-secondary mr-2">Edit</a>
                                                        <a href="#" class="btn btn-danger">Delete</a>
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