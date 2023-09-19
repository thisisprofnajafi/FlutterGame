<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Game</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    {{--    <meta name="handheldfriendly" content="true" />--}}
    {{--    <meta name="MobileOptimized" content="width" />--}}
    {{--    <meta name="description" content="Mordenize" />--}}
    {{--    <meta name="author" content="" />--}}
    {{--    <meta name="keywords" content="Mordenize" />--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('dist/images/logos/favicon.ico')}}"/>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{asset('dist/css/style.min.css')}}"/>
</head>


<body>
<!-- Preloader -->
<div class="preloader">
    <img src="../../dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="../../dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
     data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="text-nowrap logo-img">
                    <img src="../../dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt=""/>
                    <img src="../../dist/images/logos/light-logo.svg" class="light-logo" width="180" alt=""/>
                </a>
                <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Home -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Dashboard</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li  @if((Route::getFacadeRoot()->current()->uri() == 'dashboard')) class="sidebar-item active" @else class="sidebar-item" @endif>
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-activity-heartbeat"></i>
                  </span>
                            <span class="hide-menu">Game</span>
                        </a>
                    </li>
                    <li @if((Route::getFacadeRoot()->current()->uri() == 'dashboard sales')) class="sidebar-item active" @else class="sidebar-item" @endif>
                        <a class="sidebar-link" href="{{route('dashboard sales')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                            <span class="hide-menu">Sales</span>
                        </a>
                    </li>


                    <!-- ============================= -->
                    <!-- Apps -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Users</span>
                    </li>
                    <li @if((Route::getFacadeRoot()->current()->uri() == 'dashboard users')) class="sidebar-item active" @else class="sidebar-item" @endif>
                        <a class="sidebar-link" href="{{route('dashboard users')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-circle"></i>
                  </span>
                            <span class="hide-menu">All users</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->
    <!-- Main wrapper -->
    <div class="body-wrapper">
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                           href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>

                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0)"
                           class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button"
                           data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                           aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" class="rounded-circle"
                                                 width="35" height="35" alt=""/>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                     aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" class="rounded-circle"
                                                 width="80" height="80" alt=""/>
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                                <span class="mb-1 d-block text-dark">Admin</span>
                                                <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{\Illuminate\Support\Facades\Auth::user()->email}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="{{route('settings')}}"
                                               class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="../../dist/images/svgs/icon-account.svg" alt="" width="24" height="24">
                            </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                                                    <span class="d-block text-dark">Account Settings</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                            <a href="{{route('logout')}}" class="btn btn-outline-primary">Log
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>
</div>


<!-- Customizer -->
<!-- Import Js Files -->
<script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- core files -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<script src="{{asset('dist/js/app.init.js')}}"></script>
<script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>
<!-- current page js files -->
<script src="{{asset('dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('dist/js/dashboard2.js')}}"></script>
</body>
</html>
