<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{$title}}</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper theme-1-active pimary-color-blue">

    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="{{route('home')}}">
{{--                        <img class="brand-img" src="{{asset('public/logo.png')}}" alt="مزرعه من"/>--}}
                        <span>مزرعه من</span>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                        <span class="user-online-status"></span>
                    </a>
                    <ul>
                        <li>
                            {{Form::open(['route' => ['logout'], 'method' => 'post'])}}
                                <button class="btn btn-danger btn-xs">خروج</button>
                            {{Form::close()}}
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li class="navigation-header">
                <span>منو</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="{{route('rbac.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">نقش ها</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('personnel.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">کاربران (پرسنل)</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">کاربران</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('market-categories.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">دسته بندی فروشگاه</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('market-products.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">محصولات فروشگاه</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('invoices.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">فاکتور ها</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('faq.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">مطالب پرسش و پاسخ ها</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('general-tips.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">مطالب توصیه های عمومی</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('diseases.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">مطالب عمومی بیماری ها</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('categories.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
                        <span class="right-nav-text">دسته بندی مطالب</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->

    <!-- /Right Sidebar Menu -->



    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            @if(isset($heading))
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">{{$heading}}</h5>
                    </div>
                </div>
            @endif
            <!-- /Title -->

            @yield('content')

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30 text-left">
                <div class="row">
                    <div class="col-sm-12">
                        <p>2020 &copy;</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->
        </div>
    </div>
    <!-- /Main Content -->
</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/dropdown-bootstrap-extended.js')}}"></script>
<script src="{{asset('assets/js/raphael.min.js')}}"></script>
<script src="{{asset('assets/js/morris.min.js')}}"></script>
<script src="{{asset('assets/js/init.js')}}"></script>
<script src="{{asset('assets/js/morris-data.js')}}"></script>

</body>
</html>
