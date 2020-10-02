<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome Login</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('tmp/assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('tmp/demo_1/pages/sample-page/vendors/css/vendor.addons.css') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('tmp/assets/css/shared/style.css') }}" />
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('tmp/assets/css/demo_1/style.css') }}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{ asset('tmp/assets/images/favicon.ico') }}" />
  </head>

  <body>
    @yield('content')
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{ asset('tmp/assets/vendors/js/core.js') }}"></script>
    <script src="{{ asset('tmp/assets/vendors/js/vendor.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('tmp/assets/js/template.js') }}"></script>
    <!-- endbuild -->
  </body>
</html>
