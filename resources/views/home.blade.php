@extends('layout.app')

@section('content')
    <header class="header text-center text-white" style="background-image: linear-gradient(to right, #868f96 0%, #596164 100%);">
        <div class="container">

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3>LAWAN RASA PUAS DIRI, TERUSLAH BERKEMBANG.</h3>
                    {{-- <p class="lead-2 opacity-90 mt-6">"Sesungguhnya sebaik - baiknya amal adalah yang paling kontinu meski ia sedikit." (HR.Ibnu Majah)</p> --}}
                    <p class="lead-2 opacity-90 mt-2">~ ANANG NOVRIADI ~</p>
                </div>
            </div>

        </div>
    </header>
    <main class="main-content">
        <div class="section bg-gray">
            <div class="container">
            <div class="row">


                <div class="col-md-8 col-xl-9">
                <div class="row gap-y">

                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top" src="{{ asset('web/assets/img/thumb/1.jpg') }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">News</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="#">We relocated our office to a new designed garage</a></h5>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top" src="{{ asset('web/assets/img/thumb/2.jpg') }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Marketing</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="#">Top 5 brilliant content marketing strategies</a></h5>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top" src="{{ asset('web/assets/img/thumb/3.jpg') }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Design</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="#">Best practices for minimalist design with example</a></h5>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top" src="{{ asset('web/assets/img/thumb/4.jpg') }}" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Hiring</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="#">Congratulate and thank to Maryam for joining our team</a></h5>
                        </div>
                    </div>
                    </div>

                </div>


                <nav class="flexbox mt-30">
                    <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                    <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
                </nav>
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

                    <h6 class="sidebar-title">About</h6>
                    <p class="small-3">TheSaaS is a responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4. TheSaaS is a powerful and super flexible tool for any kind of landing pages.</p>


                </div>
                </div>

            </div>
            </div>
        </div>
    </main>
@endsection