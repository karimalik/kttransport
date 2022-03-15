<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('theme/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

    @yield('extra-css')
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{ route('home') }}">
                            <!-- <img src="images/logo.png" alt="" /> --><span>KT-Transport</span>
                        </a>
                    </div>
                    <li class="label">Main</li>
                    <li><a href="{{ route('home') }}"><i class="ti-home"></i> Dashbord</li>

                    <li class="label">Apps</li>
                    <li><a href="{{ route('tracteurs.index') }}"><i class="ti-truck"></i> Tracteurs</a></li>
                    <li><a href="#"><i class="ti-user"></i> Chauffeurs</a></li>
                    <li><a href="#"><i class="ti-brush-alt"></i> Carburants</a></li>
                    <li><a href="#"><i class="ti-file"></i> Activites</a></li>
                    <li><a href="#"><i class="ti-settings"></i> Pannes</a></li>
                    <li><a href="#"><i class="ti-shopping-cart"></i> Achats Pieces</a></li>
                    <li><a href="#"><i class="ti-search"></i> Recherche</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i> Deconnexion</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{ Auth::user()->name }}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="ti-power-off"></i>
                                                    <span>Deconnexion</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                @yield('page-header')

                <!-- /# row -->
                <section id="main-content">

                    @yield('content')


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © KT-Transport. - <a href="#">kttransport.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="asset{{ ('theme/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('theme/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('theme/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('theme/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <!-- <script src="{{ asset('theme/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/calendar-2/pignose.init.js') }}"></script> -->


    <!-- <script src="{{ asset('theme/js/lib/weather/jquery.simpleWeather.min.js') }}"></script> -->
    <!-- <script src="{{ asset('theme/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('theme/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('theme/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('theme/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/js/lib/owl-carousel/owl.carousel-init.js') }}"></script> -->
    <!-- scripit init-->
    <script src="{{ asset('theme/js/dashboard2.js') }}"></script>

    @yield('extra-js')
</body>

</html>