
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('staradmin/src/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('staradmin/src/assets/images/favicon.ico')}}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4 text-black">Register</h2>
                        <div class="auto-form-wrapper">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('staradmin/src/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('staradmin/src/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('staradmin/src/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('staradmin/src/assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <script src="{{asset('staradmin/src/assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
</body>
</html>