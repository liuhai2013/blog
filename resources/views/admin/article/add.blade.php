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
                <form role="form" class="form-horizontal form-separated" action="{{ route('article-save') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章标题</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $data->title or '' }}" class="form-control" name="title"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章分类</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <select class="form-control parentCategory">
                                        <option value="">请选择</option>
                                        @foreach($parentCategory as $item)
                                            <option value="{{ $item->id }}" @if(isset($data->parent_id) && $item->id == $data->parent_id) selected @endif>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <em for="section" class="invalid"></em>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-icon right" id="childCategory">
                                    @if ($currentChildCategory)
                                        <select class="form-control" name="category">
                                            @foreach($currentChildCategory as $item)
                                                <option value="{{ $item->id }}" @if(isset($data->id) && $item->id == $data->id) selected @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    <em for="section" class="invalid"></em>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章描述</label>
                            <div class="col-md-9">
                                <textarea rows="4" class="form-control" name="describe">{{ $data->describe or '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">文章内容</label>
                            <div class="col-md-9" >
                                <div id="test-editormd">
                                    <textarea name="content" style="display:none;">{{ $data->content or '' }}</textarea>
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

    <script>
        var childCategory = JSON.parse('{!! json_encode($childCategory) !!}');
        $('.parentCategory').change(function () {
            var currentId = $(this).val();
            if (currentId === "0") {
                $('#childCategory').html('');
                return false;
            }
            var currentCategory = childCategory[currentId];
            var html = '<select class="form-control" name="category">';
            for (var i in currentCategory) {
                html += '<option value='+currentCategory[i].id+'>'+currentCategory[i].name+'</option>';
            }
            html += '</select>';

            $('#childCategory').html(html);
        })
    </script>
@endsection