@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Post</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Please insert data in below</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" name="author" class="form-control" placeholder="Author" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" name="tag" class="form-control inputtags" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Image Thumb</label>
                                        <input type="file" name="image_thumb" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <div class="">
                                            <textarea name="description" class="summernote" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection