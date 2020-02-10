<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="{{ asset('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome -->
  <link href="{{ asset('/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="{{ asset('/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="{{ asset('/adminlte/bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset('/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{ asset('/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      
  @yield('cssLinks')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('frontend.includes.header')

    <!-- Sidebar -->
    @include('frontend.includes.sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('contentHeader')
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
    @include('frontend.includes.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset ('/adminlte/bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset ('/adminlte/bower_components/fastclick/lib/fastclick.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/adminlte/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset ('/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- jvectormap  -->
<script src="{{ asset ('/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
@yield('script')
<!-- SlimScroll -->
<script src="{{ asset ('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

</body>
</html>