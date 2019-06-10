<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Nang Ning - Blog</title>

    <!-- Styles -->
    <link href="{{ asset('web/assets/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/custom.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('web/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

    @yield('add_css')
  </head>

  <body>


    <!-- Navbar -->
    @include('layout.header')
    <!-- /.navbar -->


    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('layout.footer')
    <!-- /.footer -->


    <!-- Scripts -->
    @yield('add_js')
    <script src="{{ asset('web/assets/js/page.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/script.js') }}"></script>
    
  </body>
</html>
