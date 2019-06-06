@extends('layout.app')

@section('content')
<header class="header text-center text-white pt-8 pb-8" style="background-image: linear-gradient(to right, #868f96 0%, #596164 100%);">
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h2 class="lead-3 opacity-90 mt-6">Result | {{ ucwords($category->name) }}</h2>
              
          </div>
      </div>
  </div>
</header>
<main class="main-content">
  <div class="section bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-xl-9">
                  <div id="load-data">
                      <div class="row gap-y">
                          @foreach ($posts as $post)
                              <div class="col-md-6">
                                  <div class="card border hover-shadow-6 mb-6">
                                      <a href="{{ route('detail', $post->slug_name) }}"><img class="card-img-top" src="{{ asset('admin/'.$post->image_thumb) }}" alt="Card image cap"></a>
                                      <div class="p-6 text-center">
                                          <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{ route('detail', $post->slug_name) }}">{{ $post->category->name }}</a></p>
                                          <h5 class="mb-0"><a class="text-dark" href="{{ route('detail', $post->slug_name) }}">{{ $post->name }}</a></h5>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                      @if (count($posts) >= 4)
                      <div class="text-center" id="remove-row">
                          <button id="btn-more" data-id="{{ $post->id }}" class="btn btn-lg btn-primary" type="button">Load More</button>
                      </div>
                      @endif
                      {{-- <iframe
                          src="https://carbon.now.sh/embed/?bg=rgba(250%2C251%2C251%2C1)&t=monokai&wt=none&l=auto&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fm=dm&fs=14px&lh=143%25&si=false&es=2x&wm=false&code=const%2520pluckDeep%2520%253D%2520key%2520%253D%253E%2520obj%2520%253D%253E%2520key.split('.').reduce((accum%252C%2520key)%2520%253D%253E%2520accum%255Bkey%255D%252C%2520obj)%250A%250Aconst%2520compose%2520%253D%2520(...fns)%2520%253D%253E%2520res%2520%253D%253E%2520fns.reduce((accum%252C%2520next)%2520%253D%253E%2520next(accum)%252C%2520res)%250A%250Aconst%2520unfold%2520%253D%2520(f%252C%2520seed)%2520%253D%253E%2520%257B%250A%2520%2520const%2520go%2520%253D%2520(f%252C%2520seed%252C%2520acc)%2520%253D%253E%2520%257B%250A%2520%2520%2520%2520const%2520res%2520%253D%2520f(seed)%250A%2520%2520%2520%2520return%2520res%2520%253F%2520go(f%252C%2520res%255B1%255D%252C%2520acc.concat(%255Bres%255B0%255D%255D))%2520%253A%2520acc%250A%2520%2520%257D%250A%2520%2520return%2520go(f%252C%2520seed%252C%2520%255B%255D)%250A%257D"
                          style="transform:scale(0.7); width:1024px; height:473px; border:0; overflow:hidden;"
                          sandbox="allow-scripts allow-same-origin">
                      </iframe> --}}
                  </div>
              </div>
              <div class="col-md-4 col-xl-3">
                  <div class="sidebar px-4 py-md-0">
                      <h6 class="sidebar-title">Search</h6>
                      <form class="input-group" target="#" method="GET">
                          <input type="text" class="form-control" name="s" placeholder="Search">
                          <div class="input-group-addon">
                              <span class="input-group-text"><i class="ti-search"></i></span>
                          </div>
                      </form>
                          <hr>
                          <h6 class="sidebar-title">Top posts</h6>
                          @foreach ($posts as $post)
                              <a class="media text-default align-items-center mb-5" href="blog-single.html">
                                  <img class="rounded w-65px mr-4" src="{{ asset('admin/'.$post->image_thumb) }}">
                                  <p class="media-body small-2 lh-4 mb-0">{{ $post->name }}</p>
                              </a>
                          @endforeach
                          <hr>
                          <h6 class="sidebar-title">Tags</h6>
                          <div class="gap-multiline-items-1">
                              @foreach ($categories as $category)
                                  <a class="badge badge-secondary" href="#">{{ $category->name }}</a>   
                              @endforeach
                          </div>
                      <hr>
                      <h6 class="sidebar-title">About Author</h6>
                      <p class="small-3">I'm Anang Novriadi, passionate about technology, good listener of music and coffee.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection