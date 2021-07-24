<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta name="referrer" content="strict-origin" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Dashboard | iKHENT Exchange') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('sky/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('sky/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('sky/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('sky/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('sky/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('sky/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('sky/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('sky/images/favicon.jpg')}}" />
  <link rel="stylesheet" href="{{asset('sky/vendors/mdi/css/materialdesignicons.min.css')}}"/>
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('partials.settings_panel')
      @include('partials.right_sidebar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('partials.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('sky/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('sky/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('sky/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('sky/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('sky/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('sky/js/off-canvas.js')}}"></script>
  <script src="{{asset('sky/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('sky/js/template.js')}}"></script>
  <script src="{{asset('sky/js/settings.js')}}"></script>
  <script src="{{asset('sky/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('sky/js/dashboard.js')}}"></script>
  <script src="{{asset('sky/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="//code.tidio.co/o0hpe5hsckqygcu3vbenj63fkanctzts.js" async></script>
</body>
</html>
