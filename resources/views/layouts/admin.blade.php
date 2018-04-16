<!DOCTYPE html>
<html lang="en">

<head>
    <title>后台管理</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-tablesorter/themes/blue/style-custom.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/datepicker.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/css/themes/style1/orange-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="/css/style-responsive.css">
</head>

<body class=" ">
    <div>

        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button><a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">后台管理系统</span></a>
                </div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <li class="dropdown topbar-user">
                            <a data-hover="dropdown" href="#" class="dropdown-toggle"><span class="hidden-xs">欢迎：{{ Auth::user()->name }}</span>&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="/logout"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-key"></i>Log Out</a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">

                        <div class="clearfix"></div>
                        <li class="active"><a href="#"><i class="fa fa-th-list fa-fw"><div class="icon-bg bg-blue"></div></i><span class="menu-title">文章管理</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level in">
                                <li><a href="{{ route('lists') }}"><i class="fa fa-th-large"></i><span class="submenu-title">文章列表</span></a>
                                </li>
                                <li><a href="{{ route('add') }}"><i class="fa fa-tablet"></i><span class="submenu-title">文章新增</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->

            <div id="page-wrapper">
                @yield('content')
            </div>
            <div id="footer">
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
            </div>
            <!--END FOOTER-->
            <!--END PAGE WRAPPER-->
        </div>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <!--loading b/ootstrap js-->
        <script src="/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
        <script src="/vendors/metisMenu/jquery.metisMenu.js"></script>
        <script src="/vendors/slimScroll/jquery.slimscroll.js"></script>
        <script src="/vendors/jquery-cookie/jquery.cookie.js"></script>
        <script src="/vendors/iCheck/icheck.min.js"></script>
        <script src="/vendors/iCheck/custom.min.js"></script>
        <script src="/vendors/jquery-notific8/jquery.notific8.min.js"></script>
        <script src="/vendors/jquery-highcharts/highcharts.js"></script>
        <script src="/js/jquery.menu.js"></script>
        <script src="/vendors/jquery-pace/pace.min.js"></script>
        <script src="/vendors/holder/holder.js"></script>
        <script src="/vendors/responsive-tabs/responsive-tabs.js"></script>
        <script src="/vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
        <script src="/vendors/moment/moment.js"></script>
        <script src="/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!--CORE JAVA/SCRIPT-->
        <script src="/js/main.js"></script>
        <!--LOADING S/CRIPTS FOR PAGE-->
        <script src="/vendors/jquery-tablesorter/jquery.tablesorter.js"></script>
        <script src="/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/js/table-sample.js"></script>
        <script type="text/javascript">
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-145464-14', 'auto');
            ga('send', 'pageview');
        </script>
    </div>
</body>

</html>