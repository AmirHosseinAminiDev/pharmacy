<!DOCTYPE html>
<html lang="fa">
<head>
    @include('user.layouts.head-tags')
    @yield('css')
</head>

<body class="index-page sidebar-collapse">
<div class="top-section fullscreen-container">
    <img src="{{ asset('user/img/banner_img/bg_top.jpg') }}" class="h-100">
</div>
<!--start mobile header -->
@include('user.layouts.mobile-header')
<!-- end mobile header -->
<div class="wrapper default">

    <!--start pc header -->
@include('user.layouts.pc-header')
<!-- end pc header -->

    @yield('content')

    @include('user.layouts.footer')
</div>
<!--    JS Files   -->
@include('user.layouts.footer-tags')
</body>


</html>
