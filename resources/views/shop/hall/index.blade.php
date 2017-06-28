@extends('shop.base')
	@section('content')
	<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('shop')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">影厅信息</a></li>
            <li class="active">影厅列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 商户影厅管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">ID号</th>
                      <th>名称</th>
                      <th>座位数</th>
                      <th>布局</th>
                      <th style="width: 100px">操作</th>
                    </tr>
					@foreach ($hall as $vo)
					 <tr>
                      <td>{{ $vo->id }}</td>
                      <td>{{ $vo->title }}</td>
                      <td>{{ $vo->number }}</td>
                      <td>{{ $vo->layout }}</td>
                      <td><button onclick="window.location='{{ url('admin/shopdetail')}}/create'" class="btn btn-xs btn-danger">添加</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
					@endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
	
	@endsection