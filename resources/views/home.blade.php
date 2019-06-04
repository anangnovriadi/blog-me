@extends('layout.app')

@section('content')
    <header class="header text-center text-white" style="background-image: linear-gradient(to right, #868f96 0%, #596164 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h4 id="txt"></h4>
                    {{-- <p class="lead-2 opacity-90 mt-6">"Sesungguhnya sebaik - baiknya amal adalah yang paling kontinu meski ia sedikit." (HR.Ibnu Majah)</p> --}}
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
                                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                                    <img class="rounded w-65px mr-4" src="{{ asset('web/assets/img/thumb/4.jpg') }}">
                                    <p class="media-body small-2 lh-4 mb-0">Thank to Maryam for joining our team</p>
                                </a>
                                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                                    <img class="rounded w-65px mr-4" src="{{ asset('web/assets/img/thumb/3.jpg') }}">
                                    <p class="media-body small-2 lh-4 mb-0">Best practices for minimalist design</p>
                                </a>
                                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                                    <img class="rounded w-65px mr-4" src="{{ asset('web/assets/img/thumb/5.jpg') }}">
                                    <p class="media-body small-2 lh-4 mb-0">New published books for product designers</p>
                                </a>

                                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                                    <img class="rounded w-65px mr-4" src="{{ asset('web/assets/img/thumb/2.jpg') }}">
                                    <p class="media-body small-2 lh-4 mb-0">Top 5 brilliant content marketing strategies</p>
                                </a>
                                <hr>
                                <h6 class="sidebar-title">Tags</h6>
                                <div class="gap-multiline-items-1">
                                    <a class="badge badge-secondary" href="#">Record</a>
                                    <a class="badge badge-secondary" href="#">Progress</a>
                                    <a class="badge badge-secondary" href="#">Customers</a>
                                    <a class="badge badge-secondary" href="#">Freebie</a>
                                    <a class="badge badge-secondary" href="#">Offer</a>
                                    <a class="badge badge-secondary" href="#">Screenshot</a>
                                    <a class="badge badge-secondary" href="#">Milestone</a>
                                    <a class="badge badge-secondary" href="#">Version</a>
                                    <a class="badge badge-secondary" href="#">Design</a>
                                    <a class="badge badge-secondary" href="#">Customers</a>
                                    <a class="badge badge-secondary" href="#">Job</a>
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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(document).ready(function(){
           $(document).on('click','#btn-more',function(){
               var id = $(this).data('id');
               $("#btn-more").html("Loading...");
               $.ajax({
                   url : '{{ url("load") }}',
                   method : "POST",
                   data : {id:id, _token:"{{csrf_token()}}"},
                   dataType : "text",
                   success : function (data)
                   {
                      if(data != '') 
                      {
                          $('#remove-row').remove();
                          $('#load-data').append(data);
                      }
                      else
                      {
                        $('#btn-more').remove();
                      }
                   }
               });
           });  
        }); 
    </script>

    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
    <script>
        new TypeIt('#txt', {
            speed: 50,
            startDelay: 900
        })
            .type('Learn Together, Grow Together and Add Insights For Future.')
        .go();  
    </script>
@endsection