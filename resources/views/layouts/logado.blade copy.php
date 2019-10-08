    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>

        <title>{{ config('app.name', 'Datacenter Realtime') }}</title>


        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet">
        <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet"> -->


        <!-- Favicon -->
        <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{ asset('assets/css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet">
    </head>

    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="blue">
                <div class="logo">
                    <a href="{{ url('/home') }}" class="simple-text logo-mini">
                        YR
                    </a>

                    <a href="{{ url('/home') }}" class="simple-text logo-normal">RealTime-Datacenter</a>
                </div>

                <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active ">
                            <a href="{{ route('home') }}">
                                <i class="now-ui-icons design_app"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('notificacoes') }}">
                                <i class="now-ui-icons ui-1_bell-53"></i>
                                <p>Notificações</p>
                            </a>
                        </li>

                        <li>
                            <a href="./user.html">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>Perfil</p>
                            </a>
                        </li>

                        <li>
                            <a href="./tables.html">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p>Lista de tabelas</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel" id="main-panel">
                <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <!-- <a class="navbar-brand text-right" href="#pablo">Dashboard</a> -->
                        </div>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="now-ui-icons users_single-02"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Account</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <main>
                        @yield('content')
                    </main>
                </div>


                <!--   Core JS Files   -->
                <!-- <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
                <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
                <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script> -->


                <!--  Google Maps Plugin  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>  -->


                <!-- <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script> -->

                <!-- <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script> -->

                <!-- <script src="{{ asset('assets/js/now-ui-dashboard.min.js?v=1.3.0') }}" type="text/javascript"></script> -->

                <!-- <script src="{{ asset('assets/demo/demo.js') }}"></script> -->

                <!-- <script>
                    $(document).ready(function() {
                        // Javascript method's body can be found in assets/js/demos.js
                        demo.initDashboardPageCharts();
                    });
                </script> -->


                <script src="{{ asset('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
                <script src="{{ asset('assets/js/argon-dashboard.min.js?v=1.1.0') }}"></script>
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