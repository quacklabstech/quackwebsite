<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <meta charset="utf-8" />
  <title>{{ $meta_title }}</title>
  <meta name="description" content="{{ $meta_description }}">
  <meta name="keywords" content="{{ $meta_keyword }}">
  <link rel="canonical" href="{{ $meta_cannonical }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#e8f1ff">
  <!--Website-favicon-->
  <link href="{{ asset('images/favicon.png') }}" rel="icon">
  <!--Plugin-css-->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/plugin.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
  <!-- Template-style-->
  <link rel="stylesheet" href="{{asset('css/zeynep.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/base.css')}}">
  <link rel="stylesheet" href="{{asset('css/left.css')}}">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  @yield('csslink')
</head>

<body>
  <!--Start Preloader -->
  <div class="onloadpage" id="page-load">
    <div class="loader-div">
      <div class="on-img"><img src="{{ asset('images/loader.gif') }}" alt="Preloder-gif" title="preloder-gif" class="img-fluid" /><span>We are building it up for you...</span></div>
    </div>
  </div>
  <!--End Preloader -->
  @include('include.header')

  @yield('content')
  <!--start footer -->
  <!--start footer -->
  @include('include.footer')
  <!-- end footer -->
  <!-- end footer -->
  <!--All js files-->
  <script src="{{asset('js/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/app.bundle.js')}}"></script>
  <script src="{{asset('js/parallax.min.js')}}"></script>
  <script src="{{asset('js/zeynep.min.js')}}"></script>
  <!--Common QuackLabs script file-->
  <script src="{{asset('js/main.js')}}"></script>
    @yield('custom_script')
</body>

</html>