<!doctype html>
<html lang="en">

<head>

    <title>menejemen keuangan santri</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets-page/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-pages/css/color_skins.css') }}">
</head>

<body class="theme-orange">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img
                    src="https://binaqurani.sch.id/wp-content/uploads/2024/03/Logo-BQ-Islamic-Boarding-School-2-copy.webp"
                    width="48" height="48" alt="HexaBit"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-left d-flex justify-content-end">

                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log Out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>


            </div>

        </nav>

        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a class="img-fluid logo"><span>uang menejemen</span></a>               
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{ asset('assets/images/user.png') }}" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a class="user-name" data-toggle="dropdown"><strong>raka setiyawan</strong></a>

                    </div>
                </div>
            </div>
        </div>

        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>@yield('page-title')</h2>
                    </div>
                    
                </div>
            </div>

            <div class="container-fluid">

                <div class="row clearfix">

                    @yield('content')


                </div>
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets-page/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-page/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('assets-page/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets-page/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets-page/js/pages/tables/jquery-datatable.js') }}"></script>

</body>

</html>
