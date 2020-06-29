<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>پنل مدیریتی مزرعه من</title>

    <!-- vector map CSS -->
    <link href="{{asset('assets/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper  pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.html">
                <img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
                <span class="brand-text">مزرعه من</span>
            </a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            @yield('content')
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/css/jasny-bootstrap.min.css')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('assets/js/init.js')}}"></script>
</body>
</html>
