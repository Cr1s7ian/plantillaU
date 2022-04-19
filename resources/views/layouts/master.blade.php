<!DOCTYPE html>
<html>
<head>
  @include('layouts.partials._head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
@include('layouts.partials._navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.partials._sideBar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.partials._footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('layouts.partials._footer-script')
</body>
</html>
