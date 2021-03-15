<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Register</title>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('template/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('template/assets/favicon/manifest.json')}}">
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
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body p-4">
                            <h1>Register</h1>
                            <p class="text-muted">Create your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{asset('template/@coreui/icons/sprites/free.svg#cil-user')}}"></use>
                                    </svg></span></div>
                                <input class="form-control" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{asset('template/@coreui/icons/sprites/free.svg#cil-envelope-open')}}"></use>
                                    </svg></span></div>
                                <input class="form-control" type="text" placeholder="NIP/NIK" name="NIP/NIK">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{asset('template/@coreui/icons/sprites/free.svg#cil-lock-locked')}}"></use>
                                    </svg></span></div>
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{asset('template/@coreui/icons/sprites/free.svg#cil-lock-locked')}}"></use>
                                    </svg></span></div>
                                <input class="form-control" type="password" placeholder="Repeat password" name="password_confirmation" >
                            </div>
                            <button class="btn btn-block btn-success" type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('template/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <!--[if IE]><!-->
    <script src="{{ asset('template/@coreui/icons/js/svgxuse.min.js') }}"></script>
    <!--<![endif]-->
  </body>
</html>
