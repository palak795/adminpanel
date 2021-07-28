<!DOCTYPE html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- BEGIN: Head-->


@include('layouts.partials.head')

<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="hold-transition sidebar-mini layout-fixed"> 

   
<!-- BEGIN: Header-->

@include('layouts.partials.header')

<!-- END: Header-->


 <div class="content-wrapper">

   <!-- Content Header (Page header) -->
    


<!-- BEGIN: Main Menu-->

@include('layouts.partials.sidebar')

<!-- END: Main Menu-->

@yield('content')
     
    

@include('layouts.partials.footer')

<!-- Page Scripts -->

@yield('scripts')

<!-- Page scripts end -->
  


</body>

<!-- END: Body-->

</html>









