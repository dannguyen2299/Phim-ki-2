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
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="mail-all.html" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

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
                                <i class="fas fa-table"></i>
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
                                <i class="fas fa-table"></i>
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
                                <i class="fas fa-table"></i>
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
                                <i class="fas fa-user"></i>
                                <span> Report </span>
                            </a>
                        </li>

                        <li class="submenu" id="submenu-statistacal">
                            <a href="{{URL::to('admin_1/movie-detail')}}">
                                <i class="fas fa-user"></i>
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
    <script src="js/admin.js"></script>
    
    <script src="js/jquery.min.js"></script>
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
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });

        // NAVIGATION HIGHLIGHT & OPEN PARENT
        $("#sidebar-menu ul li.submenu a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
    </script>

        
</body>

</html>