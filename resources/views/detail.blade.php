@extends('layouts.web')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <header class="entry-header page-header">
                    <h1>{{ $info->title }}</h1>
                    <div class="entry-meta text-muted">
                        <span class="posted-on"><i class="glyphicon glyphicon-calendar"></i> 发表于 <a href="#" rel="bookmark"><time class="entry-date published" datetime="2018-03-28T11:58:48+00:00">2018年3月28日</time></a></span><span class="byline"> by <span class="author vcard"><i class="glyphicon glyphicon-user"></i> <a class="url fn n" href="#">白鱼条</a></span></span>					</div>
                </header>
                {!! MarkdownEditor::parse($info->content) !!}
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
