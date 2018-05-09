@extends('layouts.web')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div id="myCarousel" class="carousel slide">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://baiyutiao.oss-cn-hangzhou.aliyuncs.com/1_640_481.jpg?Expires=1524135395&OSSAccessKeyId=TMP.AQHMWgPNyIZYII54TcE4X2gCggAZr-h9tPooQ1lNLXsXYjK8XBWeorBAW2rqMC4CFQDXqFNhTZX8oAiu3MbNgekTMl3D_gIVAMWk5tic6CK8q2KpjnrfJSvbUmat&Signature=21kaYiuSp7dMiTHf9tfOGQpQs9U%3D" alt="First slide" style="width:100%;height: 430px;">
                        </div>
                        <div class="item">
                            <img src="
https://baiyutiao.oss-cn-hangzhou.aliyuncs.com/linuxkit_primary-100028443-560x345.jpg.jpg?Expires=1524135580&OSSAccessKeyId=TMP.AQHMWgPNyIZYII54TcE4X2gCggAZr-h9tPooQ1lNLXsXYjK8XBWeorBAW2rqMC4CFQDXqFNhTZX8oAiu3MbNgekTMl3D_gIVAMWk5tic6CK8q2KpjnrfJSvbUmat&Signature=%2FKbG1h6ZwvBndTyHxZZkGlSYaXw%3D" style="width:100%;height: 430px;" alt="Second slide">
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <aside id="text-2" class="widget widget_text panel panel-default"><div class="panel-heading"><h3 class="widget-title panel-title">文档 &#038; 下载 &#038; 公告</h3></div><div class="panel-body">			<div class="textwidget"><p><a href="https://wx.xiaomiquan.com/mweb/views/joingroup/join_group.html?group_id=4515241518&amp;secret=eb5z8vh2zapqwj74vhvmg1x479pdkmvw&amp;extra=5df1e93168e0405521c36d83581a10f30f2dc68d6a773298ffde9154f3ee4f93"><strong>【推荐】学院君和他的朋友们持续学习社群</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_6"><strong>Laravel 5.6 中文文档（含离线文档）</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_5"><strong>Laravel 5.5 中文文档（持续更新）</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_4"><strong>Laravel 5.4 中文文档</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_3"><strong>Laravel 5.3 中文文档</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_2"><strong>Laravel 5.2 中文文档</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-docs-5_1"><strong>Laravel 5.1 中文文档</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-tutorial-5_1"><strong>Laravel 5.1 基础教程</strong></a><br />
                                <a href="http://laravelacademy.org/tutorials/blog"><strong>Laravel 5.1 博客实战</strong></a><br />
                                <a href="http://laravelacademy.org/laravel-project"><strong>Laravel 完整开源项目大全</strong></a><br />
                                <a href="http://laravelacademy.org/lumen-docs"><strong>Lumen 5.x 中文文档</strong></a><br />
                                <a href="http://laravelacademy.org/resources-download"><strong>中文离线文档&amp;一键安装包下载</strong></a><br />
                                <a href="http://laravelacademy.org/about-us#weixin-qrcode"><strong>Laravel 学院微信群</strong></a><br />
                                <a href="https://jq.qq.com/?_wv=1027&amp;k=5i5kTdM" target="_blank" rel="noopener"><strong>Laravel 学习交流QQ群</strong></a><br />
                                <a href="http://forum.laravelacademy.org/" target="_blank" rel="noopener"><strong>问题求教&amp;讨论区：Laravel学堂</strong></a></p>
                        </div>
                    </div></aside>
            </div>
        </div>
    </div>
@endsection
