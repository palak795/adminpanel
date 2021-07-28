<!DOCTYPE html>

<html>

@include('layouts.partials.head')

<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="hold-transition login-page"> 

<div class="register-box">


@yield('content')


@yield('scripts')

<!-- Page scripts end -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

  
</body>


</html>