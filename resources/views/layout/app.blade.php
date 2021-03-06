<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Nang Ning - Learn Together</title>

    <!-- Styles -->
    <link href="{{ asset('web/assets/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/custom.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('web/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

    @yield('add_css')
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-8666870874077770",
              enable_page_level_ads: true
        });
    </script>
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
