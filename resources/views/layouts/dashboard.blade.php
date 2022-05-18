<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel Pertama Rizky</title>

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script> 
    <link rel="stylesheet" href="{{ asset('assets/datepicker/datepicker.min.css')}}"> 
    <script src="{{ asset('assets/datepicker/bootstrap-datepicker.min.js')}}"></script>  
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/">
                    <span class="align-middle">LARAVEL PERTAMA</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header"> Pages </li>

                    <li class="sidebar-item {{ Request::path() == '/' ? 'active' : '' }}"">
                        <a class=" sidebar-link" href="/">
                        <i class="align-middle" data-feather="sliders"></i> <span
                            class="align-middle">Homepage</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::segment(1) === 'friends' ? 'active' : null }}">
                        <a class="sidebar-link" href="/friends">
                            <i class="align-middle" data-feather="user"></i> <span
                                class="align-middle">Friends</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::segment(1) === 'groups' ? 'active' : null }}">
                        <a class="sidebar-link" href="/groups">
                            <i class="align-middle" data-feather="box"></i> <span
                                class="align-middle">Groups</span>
                        </a>
                    </li>
                  




                </ul>

              
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    {{-- <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1> --}}

                    @yield('content')

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="#" target="_blank"><strong>Copyright</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#" target="_blank">
                                        2022</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>
