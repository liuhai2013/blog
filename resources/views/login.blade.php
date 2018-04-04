<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In | Extras</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--Loading bootstrap css-->
    {{--<link type="text/css" href="http://fonts.useso.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">--}}
    {{--<link type="text/css" rel="stylesheet" href="http://fonts.useso.com/css?family=Oswald:400,700,300">--}}
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/css/themes/style1/pink-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/css/themes/style1/pink-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="/css/style-responsive.css">
</head>
<body id="signup-page">
<div class="page-form">
        <div class="header-content">
            <h1>Hi,欢迎光临</h1>
        </div>
        <div class="body-content">
            <form class="form-horizontal" method="post" action="/login">
                {{ csrf_field() }}
                <p>登录：</p>
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-envelope"></i>
                        <input type="text" placeholder="用户名" id="loginName" name="email" class="form-control">
                        <em for="loginName" class="invalid"></em>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-key"></i>
                        <input type="password" placeholder="密码" id="password" name="password" class="form-control">
                        <em for="password" class="invalid"></em>
                    </div>
                </div>
                <div class="form-group pull-left">
                    <div class="checkbox-list">
                        <label>
                            <input type="checkbox">&nbsp; 记住我</label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <button type="submit" id="loginButton" class="btn btn-success">登录 &nbsp;
                        <i class="fa fa-chevron-circle-right"></i>
                    </button>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.min.js"></script>
<script src="/vendors/iCheck/icheck.min.js"></script>
<script src="/vendors/iCheck/custom.min.js"></script>
<script>
    //BEGIN CHECKBOX & RADIO
    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_minimal-grey',
        increaseArea: '20%' // optional
    });
    $('input[type="radio"]').iCheck({
        radioClass: 'iradio_minimal-grey',
        increaseArea: '20%' // optional
    });
</script>
</body>
</html>