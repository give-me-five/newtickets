@extends('admin.base')
	@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">商户信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 商户信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">ID号</th>
                      <th>帐号</th>
                      <th>商家名称</th>
                      <th>手机</th>
                      <th>法人代表</th>
                      <th>身份证号</th>
                      <th>地址</th>
                      <th>营业执照</th>
                      <th>状态</th>
                      <th>注册时间</th>
                      <th style="width: 100px">操作</th>
                    </tr>
					@foreach ($shopdetail as $vo)
					 <tr>
                      <td>{{ $vo->id }}</td>
                      <td>{{ $vo->name }}</td>
                      <td>{{ $vo->shopname }}</td>
                      <td>{{ $vo->phone }}</td>
                      <td>{{ $vo->legal }}</td>
                      <td>{{ $vo->id_card }}</td>
                      <td>{{ $vo->address }}</td>
                      <td>{{ $vo->licence }}</td>
                      <td>{{ $vo->status }}</td>
                      <td>{{ $vo->addtime }}</td>
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