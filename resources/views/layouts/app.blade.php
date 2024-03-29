    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Datacenter - RealTime
        </title>

        <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }} " rel="stylesheet">

        <link href="{{ asset('assets/css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet">
    </head>

    <body class="">
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="laptop-main">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <!-- <a class="navbar-brand pt-0" href="./index.html">
                    <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
                </a> -->
                <!-- User -->
                <ul class="nav align-items-center d-md-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}">
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="./index.html">
                                    <img src="{{ asset('assets/img/brand/blue.png') }}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item  class=" active" ">
                            <a class=" nav-link active " href="{{route('home')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('tabela')}}">
                                <i class="ni ni-bullet-list-67 text-red"></i> Tabelas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./examples/login.html">
                                <i class="ni ni-bell-55 text-info"></i> Alertas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('home')}}">
                                <i class="ni ni-button-power text-orange"></i> Shutdown
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link " href="./examples/profile.html">
                                <i class="ni ni-single-02 text-yellow"></i> User profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./examples/tables.html">
                                <i class="ni ni-bullet-list-67 text-red"></i> Tables
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./examples/login.html">
                                <i class="ni ni-key-25 text-info"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./examples/register.html">
                                <i class="ni ni-circle-08 text-pink"></i> Register
                            </a>
                        </li> -->
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </nav>

        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <!-- <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a> -->
                    
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex text-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Bem vindo ao Datacenter RealTime,</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <a href="{{route('logout')}}" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
            
            
            @yield('content')

        </div>


            <!--   Core   -->
            <script src="{{ ('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ ('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <!--   Optional JS   -->
            <script src="{{ ('assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
            <script src="{{ ('assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
            <!--   Argon JS   -->
            <script src="{{ ('assets/js/argon-dashboard.min.js?v=1.1.0') }}"></script>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
            <script>
                window.TrackJS &&
                    TrackJS.install({
                        token: "ee6fab19c5a04ac1a32a645abde4613a",
                        application: "argon-dashboard-free"
                    });
            </script>
    </body>

    </html>