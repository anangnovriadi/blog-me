@extends('layout.app')

@section('content')
    <main class="main-content">
        <div class="section">
            <div class="container">
                <div class="text-center mt-7">
                    <h2>{{ $post->name }}</h2>
                    <p>{{ $create }} by <a href="#">{{ $post->author }}</a></p>
                </div>
                <div class="text-center my-7">
                    <img class="rounded-md" src="{{ asset('admin/'.$post->image_thumb) }}" alt="...">
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        {!! $post->description !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="gap-xy-2 mt-6">
                        @foreach ($tag as $item)
                            <a class="badge badge-pill badge-secondary" href="#">{{ $item }}</a>   
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Comment --}}
        <div class="section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        @if (count($comments) > 0)
                            @foreach ($comments as $comment)
                            <div class="media-list">
                                <div class="media">
                                    <img class="avatar avatar-sm mr-4" src="{{ asset('web/assets/img/avatar/1.jpg') }}" alt="...">
                                    <div class="media-body">
                                        <div class="small-1">
                                        <strong>{{ $comment->name }}</strong>
                                        <time class="ml-4 opacity-70 small-3" datetime="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</time>
                                        </div>
                                        <p class="small-2 mb-0">{{ $comment->message }}.</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <div class="text-center pb-5">
                            No Comment
                        </div>
                        @endif
                        <hr>
                        <form action="{{ route('comment') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <input type="hidden" name="id" placeholder="Name" value="{{ $post->id }}" required>
                                <div class="form-group col-12 col-md-6">
                                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Comment" name="message" rows="4" required></textarea>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Submit your comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection