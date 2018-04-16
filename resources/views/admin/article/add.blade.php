@extends('layouts.admin')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">文章新增</div>
        </div>
        <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="#">文章管理</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">文章新增</li>
        </ol>
        <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
            <input type="hidden" name="datestart" />
            <input type="hidden" name="endstart" />
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="page-content">
        <div class="portlet box portlet-green">
            <div class="portlet-body">
                <form role="form" class="form-horizontal form-separated" action="/article/save" method="post">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章标题</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="" class="form-control" name="title"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章分类</label>
                            <div class="col-md-3">
                                <select class="form-control" name="category">
                                    <option value="1">PHP</option>
                                    <option value="2">JAVA</option>
                                    <option value="3">MYSQL</option>
                                    <option value="4">LINUX</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章描述</label>
                            <div class="col-md-9">
                                <textarea rows="4" placeholder="" class="form-control" name="describe"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章内容</label>
                            <div class="col-md-9" >
                                <div id="test-editormd">
                                    <textarea name="content" style="display:none;"></textarea>
                                </div>
                            </div>

                            @include('markdown::encode',['editors'=>['test-editormd']])
                        </div>
                    </div>
                    <div class="form-actions text-center pal">
                        <button type="submit" class="btn btn-green btn-lg">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection