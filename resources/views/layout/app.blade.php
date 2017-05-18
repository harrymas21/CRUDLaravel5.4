<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <!--ul class="nav navbar-nav">
                        <li>
                            <a href="/home"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home" aria-hidden="true"></i></span> Home</a>
                        </li>
                        <li>
                            <a href="/news"><span class="fa-stack fa-lg pull-left"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>News</a>
                        </li>
                        <li>
                            <a href="/about"><span class="fa-stack fa-lg pull-left"><i class="fa fa-buysellads" aria-hidden="true"></i></span>About</a>
                        </li>
                        <li>
                            <a href="/contact-us"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>Contact</a>
                        </li>
                    </ul-->
                </div>
            </div>
        </nav>
        <!---start of the side bar menu and wrapper--->
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                   <!------<li> here!--->
                </ul>

            </div><!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid xyz">
                    <div class="row">
                        <div class="col-lg-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!---end of the side bar menu and wrapper--->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sidebar_menu.js') }}"></script>
</body>
</html>
