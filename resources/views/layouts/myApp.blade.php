<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SIMPEG | @yield('title')</title>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('template/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template/assets/favicon/favicon-32x32.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('template/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('template/@coreui/chartjs/dist/css/coreui-chartjs.css') }}" rel="stylesheet">
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <img width="30" height="30" src="{{ asset('Logo_Unand.png') }}"><b>  SIMPEG</b></img>
        </div>
        {{-- <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('template/assets/brand/coreui.svg#signet') }}"></use>
        </svg> --}}
      </div>
      @include('komponen.sidebar')
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      @include('komponen.header')
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                @yield('content')
              <!-- /.row-->
            </div>
          </div>
        </main>

      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('template/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('template/@coreui/icons/js/svgxuse.min.js') }}"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('template/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('template/@coreui/utils/dist/coreui-utils.js') }}"></script>
    <script src="{{ asset('template/js/main.js')}}"></script>
    <script src="{{ asset('js/biodata.js')}}"></script>
  </body>
</html>
