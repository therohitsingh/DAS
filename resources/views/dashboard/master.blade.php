<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://image.freepik.com/free-vector/doctor-character-background_1270-84.jpg" type="image/gif" sizes="16x16">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('ass/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ass/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('ass/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('ass/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ass/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ass/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
   <title>HealthGuru</title>

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('ass/css/style.css') }}">


    <!-- End layout styles -->
    <style>
        input[type="date"]::-webkit-calendar-picker-indicator {
            color: rgba(0, 0, 0, 0);
            opacity: 1;

            background: url(https://img.icons8.com/doodle/48/000000/calendar.png) ;

            width: 20px;
            height: 25px;

        }
        input[type="time"]::-webkit-calendar-picker-indicator {
            color: rgba(0, 0, 0, 0);
            opacity: 1;

            background: url(https://img.icons8.com/ultraviolet/40/000000/clock--v1.png) ;

            width: 20px;
            height: 25px;

        }


    </style>


</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <h1 class="mb-0"><a href="/" class=" sidebar-brand brand-logo text-white h2 mb-0"><strong>HealthGuru<span class="text-danger">.</span></strong></a></h1>
            <a class="sidebar-brand brand-logo-mini" href="{{url("/dashboard")}}"><strong style="color: white">H<span class="text-danger">G</span></strong></a>
        </div>

        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">

                        <div class="count-indicator">
@if(!empty(Auth::user()->avatar))
                            <img class="img-xs rounded-circle " src="{{ url('/upload/'.Auth::user()->avatar) }}" alt="">
                            <span class="count bg-success"></span>
                            @else
                                <img class="img-xs rounded-circle " src="{{asset('/ass/images/man.png')}}" alt="">
                                <span class="count bg-success"></span>
    @endif
                        </div>


                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal"> {{ Auth::user()->name }}</h5>

                        </div>
                    </div>

                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">



                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url("/dashboard")}}">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <!-- Authentication Links -->


            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account-outline"></i>
              </span>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/info')}}"> Add Profile  </a></li>
                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/profile')}}"> View Profile  </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi mdi-heart"></i>
              </span>
                    <span class="menu-title">Donor</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/donor')}}"> Donate Organ  </a></li>

                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/searchd')}}"> Search Donor  </a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-plus"></i>
              </span>
                    <span class="menu-title">Appointment</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/search')}}"> Book Appointment  </a></li>
                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/appointmenthistory')}}"> Appointment History  </a></li>
                    </ul>
                </div>

            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-ambulance
"></i>
              </span>
                    <span class="menu-title">Treatment</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/addtreatment')}}"> Add Treatment  </a></li>
                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/treatmentresult')}}"> Treatments  </a></li>
                    </ul>
                </div>

            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href=" {{url('/dashboard/payment')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contactless-payment"></i>
              </span>
                    <span class="menu-title">Payment</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <span class="menu-icon">
                <i class="mdi mdi-shield"></i>
              </span>
                    <span class="menu-title">Log Out</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href=""></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search ">
                            </form>

                        </li>
                    </ul>
                    <ul class="navbar-nav w-300">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">

                                <div class="navbar-profile">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Current Sign In: {{ Auth::user()->current_sign_in_at->diffForHumans() }}</p>
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Last Sign In: {{ Auth::user()->last_sign_in_at->diffForHumans() }}</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

        <!-- partial -->
        @yield('content')

    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset ('ass/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('ass/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('ass/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('ass/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('ass/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('ass/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('ass/js/off-canvas.js') }}"></script>
<script src="{{ asset('ass/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('ass/js/misc.js') }}"></script>
<script src="{{ asset('ass/js/settings.js') }}"></script>
<script src="{{ asset('ass/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('ass/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
</body>
</html>
