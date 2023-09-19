<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('dist/images/logos/favicon.ico')}}" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('dist/css/style.min.css')}}" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    Loading ...
</div>
<!-- Preloader -->
<div class="preloader">
    Loading ...
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img src="dist/images/logos/dark-logo.svg" width="180" alt="">
                            </a>
                            <form method="post" action="{{route('login')}}">
                                @csrf
                                <p>Welcome back, please log in to continue</p>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="log in">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--  core files -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<script src="{{asset('dist/js/app.init.js')}}"></script>
<script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>

<script src="{{asset('dist/js/custom.js')}}"></script>
</body>
</html>
