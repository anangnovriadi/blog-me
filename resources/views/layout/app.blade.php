<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheNang - Blog</title>

    <!-- Styles -->
    <link href="{{ asset('web/assets/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('web/assets/img/favicon.png') }}">
  </head>

  <body>


    <!-- Navbar -->
    @include('layout.header')
    <!-- /.navbar -->


    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>Latest Blog Posts</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header>
    <!-- /.header -->


    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('layout.footer')
    <!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('web/assets/js/page.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/script.js') }}"></script>

  </body>
</html>
