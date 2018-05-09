@extends('layouts.admin')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">分类管理</div>
        </div>
        <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="#">文章管理</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">@if (isset($data->id))分类修改@else分类新增@endif</li>
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
                <form role="form" class="form-horizontal form-separated" action="{{ route('category-save') }}" method="post">
                    <input type="hidden" value="{{ $data->id or '' }}" name="cid">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">父级</label>
                            <div class="col-md-3">
                                <select class="form-control" name="parent_id" @if (isset($data->parent_id) && $data->parent_id == 0) disabled @endif   >
                                    <option value="">请选择</option>
                                    <option value="0">无</option>
                                    @foreach($category as $item)
                                        <option value="{{ $item->id }}" @if(isset($data->parent_id) && $item->id == $data->parent_id) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">名称</label>
                            <div class="col-md-3">
                                <input type="text" value="{{ $data->name or '' }}" class="form-control" name="name"/>
                            </div>
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