<nav class="{{ request()->is('/') ? 'navbar navbar-expand-lg navbar-light navbar-stick-dark' : 'navbar navbar-expand-lg navbar-dark bg-white navbar-stick-dark' }}" data-navbar="smart">
    <div class="container">
        <div class="navbar-left">
            <button class="navbar-toggler" type="button">☰</button>
            <a class="navbar-brand" href="../index.html">
              <img class="logo-dark" src="{{ asset('web/assets/img/logo-dark.png') }}" alt="logo">
              <img class="logo-light" src="{{ asset('web/assets/img/logo-light.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>
            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories <span class="arrow"></span></a>
                    <nav class="nav columns">
                        <a class="nav-link" href="#">Tech</a>
                        <a class="nav-link" href="#">Code</a>
                        <a class="nav-link" href="#">Self</a>
                    </nav>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://images.unsplash.com/photo-1504616796709-0f9a325affb2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">#Ramadhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/anang-novriadi-b04690114/">About</a>
                </li>
            </ul>
        </section>
    </div>
  </nav>