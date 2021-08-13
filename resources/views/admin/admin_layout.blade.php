<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <base href="{{ asset('').'admin/' }}">
    <!-- Favicon -->
    <!-- <link rel="icon" href="{{asset('').'frontend/img/icon.png'}}" type="image/gif" sizes="16x16"> -->
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>

    <!-- Font Awesome CSS -->
    <link href="font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <!-- <link rel="stylesheet" type="text/css" href="plugins/chart.js/Chart.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            
            <div class="headerbar-left">
                <a href="{{URL::to('admin_1/')}}" class="logo">
                    <img src="{{asset('').'frontend/img/icon.png'}}" alt="">
                    <span><span class="text-danger">Movie</span> Admin</span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
              
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <small>Hello, {{Session::get('name')}}</small>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <a href="/logout">Đăng xuất</a>
                        </a>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img class="avatar-rounded"src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b8919e7a-2bb5-40c7-af15-8218d853bd92/d4njygs-38bef077-dd7a-4e80-8ac2-663485780f8c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2I4OTE5ZTdhLTJiYjUtNDBjNy1hZjE1LTgyMThkODUzYmQ5MlwvZDRuanlncy0zOGJlZjA3Ny1kZDdhLTRlODAtOGFjMi02NjM0ODU3ODBmOGMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.QqebgwhESsFn9NTetrmu7qI4l9juTGmfL59O0TjH4Zo" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, {{Session::get('name')}}</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.html" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                               
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu" id="submenu-dashboard">
                            <a href="{{URL::to('admin_1/dashboard')}}">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('')}}">
                                <i class="fas fa-home"></i>
                                <span> Home Page </span>
                            </a>
                        </li>

                        <li class="submenu" id="submenu-user">
                            <a href="{{Request::url().'#'}}">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('admin_1/add-user')}}">Add user</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin_1/user')}}">All user</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu" id="submenu-category">
                            <a href="{{Request::url().'#'}}" id="tables">
                                <i class="fas fa-table"></i>
                                <span> Category </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('admin_1/add-category')}}">Add Category</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin_1/list-category')}}">All category</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu" id="submenu-movie">
                            <a href="{{Request::url().'#'}}" id="tables">
                                <i class="fas fa-film"></i>
                                <span> Movie </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('admin_1/add-movie')}}">Add Movie</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin_1/list-movie')}}">All Movie</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="submenu" id="submenu-nation">
                            <a href="{{Request::url().'#'}}" id="tables">
                            <i class="fas fa-location-arrow"></i>
                                <span> Nation </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('admin_1/add-nation')}}">Add Nation</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin_1/list-nation')}}">All Nation</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu" id="submenu-advertisement">
                            <a href="{{Request::url().'#'}}" id="tables">
                            <i class="fab fa-adversal"></i>
                                <span> Advertisement </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('admin_1/add-advertisement')}}">Add Advertisement</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin_1/list-advertisement')}}">All Advertisement</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu" id="submenu-report">
                            <a href="{{URL::to('admin_1/list-report')}}">
                            <i class="fas fa-bug"></i>
                                <span> Report </span>
                            </a>
                        </li>

                        <li class="submenu" id="submenu-statistacal">
                            <a href="{{URL::to('admin_1/movie-detail')}}">
                            <i class="fas fa-globe"></i>
                                <span> Statistacal </span>
                            </a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('admin_content')

                </div>
            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://daotao.nuce.edu.vn/" title=""><b>NUCE</b></a>
            </span>
        </footer>

    </div>
    <!-- END main -->

    <!-- Add active class in left sidebar -->
    @yield('script')


    <!-- App js -->
    
    <!-- App js -->
    <script src="js/admin.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="plugins/datatables/datatables.min.js"></script>
    <!--validation  -->
    <script src="plugins/parsleyjs/parsley.min.js"></script>
    <script src="js/fastclick.js"></script>
    
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable();

            // counter-up
            // $('.counter').counterUp({
            //     delay: 10,
            //     time: 600
            // });
        });

        // NAVIGATION HIGHLIGHT & OPEN PARENT
        // $("#sidebar-menu ul li.submenu a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
    </script>

        
</body>

</html>