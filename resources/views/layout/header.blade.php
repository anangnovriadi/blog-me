<nav class="{{ Request::segment(1) === null || Request::segment(1) === 'category' ? 'navbar navbar-expand-lg navbar-light navbar-stick-dark' : 'navbar navbar-expand-lg navbar-dark bg-white navbar-stick-dark' }}" data-navbar="smart">
    <div class="container">
    {{-- {{ dd(Request::segment(1)) }} --}}
        <div class="navbar-left">
            <button class="navbar-toggler" type="button">☰</button>
            <a class="navbar-brand" href="{{ route('home') }}">
              <img class="logo-dark" src="{{ asset('web/assets/img/logo-nang-dark.png') }}" alt="logo">
              <img class="logo-light" src="{{ asset('web/assets/img/logo-nang.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>
            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Technology <span class="arrow"></span></a>
                    <nav class="nav columns">
                        <a class="nav-link" href="{{ route('category.home', '7') }}">Programming</a>
                        <a class="nav-link" href="{{ route('category.home', '4') }}">Devops</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.home', '6') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/anang-novriadi-b04690114/">About</a>
                </li>
            </ul>
        </section>
    </div>
  </nav>