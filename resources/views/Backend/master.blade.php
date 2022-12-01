<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>EFBC - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico')  }}">

        <!-- C3 charts css -->
        <link href="{{ asset('admin/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />
       
        <link href="{{ asset('css/yit-theme.css') }}" rel="stylesheet" type="text/css" />

        <style>
            /* all pdf,excel .. button */
            .btn:hover {
                background: #921d44 !important;
                color: #ffffff !important;
                }
                /* search button */
                #datatable-buttons_filter {
	            float: right;
	            margin-top: -22px;
                }
                /* user profile name and logout */
                .profile-dropdown {
                    width: 230px !important;
                    margin-right: -12px !important;
                    background: #9eeee7
                }
        </style>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo">
                                <span> 
                                    <img src="{{ asset('admin/images/logo/logo_euro.jpg') }}" alt="Logo">
                                </span>
                        <!-- <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i> -->
                    </a>
                </div>

                <nav style="background-color: #1ACEE1 !important;" class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('admin/images/users/avatar-6.jpg') }}" alt="user" title=" Welcome ! {{  Auth::user()->name ?? '' }}" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown dropdown-user">
                                        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('admin/users/avatar-7.jpg') }}" class="rounded-circle mr-2" alt="" height="34">
                                                    <small style="font-size: 13px;">Welcome ! {{  Auth::user()->name ?? '' }} </small>
                                        </a>
                        
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item">
                                                <span class="text-overflow">
                                                    <small style="font-size: 13px;">Welcome ! {{  Auth::user()->name ?? '' }} </small>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- item-->
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                            <i class="zmdi zmdi-power"></i> <span>{{ __('Logout') }}</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button style="background-color: #1ACEE1;" class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <span> <i class="fa fa-tachometer"></i>Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"> <span><i class="fi-paper-stack"></i>Attendee</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('add-attendee') }}"><i class="dripicons-arrow-thin-right"></i>Add Register</a></li>
                                    <li><a href="{{ route('regAttendeeList') }}"><i class="dripicons-arrow-thin-right"></i>Register List</a></li>
                                    <li><a href="{{ route('attendee.list') }}"><i class="dripicons-arrow-thin-right"></i>Attendee List</a></li>
                                    <li><a href="{{ route('list_trash_regis') }}"><i class="dripicons-arrow-thin-right"></i>Delete Register List</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><span><i class="fi-paper-stack"></i>Payment</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('payment_list') }}"><i class="dripicons-arrow-thin-right"></i>Complete Payment</a></li>
                                    <li><a href="{{ route('create') }}"><i class="dripicons-arrow-thin-right"></i>Make Payment</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="{{ route('view-category') }}"><span><i class="fi-paper-stack"></i>Group Category</span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><span><i class="fi-paper-stack"></i>Group</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('golf_view') }}"><i class="dripicons-arrow-thin-right"></i>Golf</a></li>
                                    <li><a href="{{ route('fishing_view') }}"><i class="dripicons-arrow-thin-right"></i>Fishing</a></li>
                                    <li><a href="{{ route('messaging_view') }}"><i class="dripicons-arrow-thin-right"></i>Messaging</a></li>
                                    <li><a href="{{ route('networking_view') }}"><i class="dripicons-arrow-thin-right"></i>Networking</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><span><i class="fi-paper-stack"></i>Settings</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('settings.index') }}"><i class="dripicons-arrow-thin-right"></i>Company Setting</a></li>
                                    <li><a href="{{ route('user.index') }}"><i class="dripicons-arrow-thin-right"></i>User Setting</a></li>
                                    <li><a href="{{ route('make_price') }}"><i class="dripicons-arrow-thin-right"></i>Option</a></li>
                                </ul>
                            </li>

                            

                            <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="fa fa-sign-out"></i> <span>{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            @yield('content')



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
       


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{asset('admin/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('admin/js/metisMenu.min.js') }}"></script>
        <script src="{{asset('admin/js/waves.js') }}"></script>
        <script src="{{asset('admin/js/jquery.slimscroll.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{asset('admin/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{asset('admin/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{asset('admin/plugins/d3/d3.min.js') }}"></script>

        <!--Echart Chart-->
        <script src="{{asset('admin/plugins/echart/echarts-all.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('admin/pages/jquery.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{asset('admin/js/jquery.core.js') }}"></script>
        <script src="{{asset('admin/js/jquery.app.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
       
        <!-- Responsive examples -->

        <!-- Responsive examples -->
        <script src="{{ asset('admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
 <!-- Buttons examples -->

        <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
        {{-- client js EBFC --}}
        <script src="{{ asset('admin/plugins/datatables/scroller.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/select.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/select2/bootstrap_multiselect.js') }}"></script>
        <script src="{{ asset('admin/plugins/select2/select_2.min.js') }}"></script>
        

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

        <!-- /main content -->

        <script>
            jQuery(function($) {
                var url = "//eastfuelconf.com/sub/admin/registereduser";
                $('.nav-sidebar a').filter(function() {
                    return $(this).attr('href').toLowerCase() == url;
                }).addClass('active').closest('.nav-item-submenu').addClass('nav-item-open').find(
                    '.nav-group-sub').css({
                    'display': 'block'
                });
            });

            $('.pickadate').pickadate({
                formatSubmit: 'yyyy-mm-dd',
                onStart: function() {
                    var date = new Date();
                    this.set('select', [date.getFullYear(), date.getMonth(), date.getDate()]);
                },
            });

        </script>
        

    </body>
</html>