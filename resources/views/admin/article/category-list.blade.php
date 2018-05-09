@extends('layouts.admin')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">分类列表</div>
        </div>
        <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="#">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="#">文章管理</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">分类列表</li>
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
                <div class="table-responsive">
                    <table id="table_id" class="table table-hover table-striped table-bordered table-advanced tablesorter display">
                        <thead>
                            <tr>
                                <th style="width: 3%; padding: 10px; background: #efefef">
                                    <input type="checkbox" class="checkall" />
                                </th>
                                <th width="25%">ID</th>
                                <th width="25%">名称</th>
                                <th width="25%">父级</th>
                                <th width="25%">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    <input type="checkbox" />
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ empty($parentCategory[$item->parent_id]) ? '' : $parentCategory[$item->parent_id] }}</td>
                                <td>
                                    <a class="btn btn-default btn-xs" type="button" href={{ route('category', ['id' => $item->id]) }}><i class="fa fa-edit"></i>&nbsp; Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="text-align: right">{!! $data->links() !!}</div>
                </div>
            </div>
        </div>
    </div>

@endsection