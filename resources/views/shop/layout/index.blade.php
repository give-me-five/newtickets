@extends('shop.base')
@section('content')
     {{--加载选坐插件的样式--}}
<script src="{{asset('myadmin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <i class="fa fa-calendar"></i>
        添加布局信息
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('shop')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">添加布局信息</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-plus"></i> 添加布局信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{url('shop/store')}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">布局名称：</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" class="form-control"  placeholder="布局名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">座位排数：</label>
                            <div class="col-sm-4">
                                <input type="number" min="1" value="7" name="cowsnumber" class="form-control"  placeholder="座位排数">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">座位数量：</label>
                            <div class="col-sm-4">
                                <input type="number" min="1" name="seatnumber" value="5" class="form-control" placeholder="每排座位数量">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">座位布局：</label>
                            <div class="col-sm-4">
                                <button name="editLayoutButton"  type="button" onclick="editlayout()" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">编辑布局</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">座位数量：</label>
                            <div class="col-sm-4">
                                <input type="text" disabled class="form-control" id="inputPassword3" placeholder="座位数量" name="number">
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="col-sm-offset-2 col-sm-1">
                            <button type="submit" class="btn btn-primary">添加</button>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary">重置</button>
                        </div>
                    </div><!-- /.box-footer -->
                </form>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
            </div><!-- /.box -->

            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" data-toggle='popover' role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">布局编辑</h4>
                        </div>
                        <center>
                        <div class="modal-body" >
                               {{--<ol>--}}
                    <p>
                        feafwe
                    </p>
                                   {{--<button type="button" class="btn btn-default">1</button>--}}
                                   {{--<button type="button" class="btn btn-default">2</button>--}}
                                   {{--<button type="button" class="btn btn-default">11</button>--}}
                                   {{--<button type="button" class="btn btn-default">1</button>--}}
                                   {{--<button type="button" class="btn btn-default">1</button>--}}
                                   {{--<button type="button" class="btn btn-default">-</button>--}}

                               {{--</ol>--}}
                                {{--<ul>--}}
                                    {{--<button type="button" class="btn btn-default">1</button>--}}
                                    {{--<button type="button" class="btn btn-default">1</button>--}}
                                    {{--<button type="button" class="btn btn-default">12</button>--}}


                                    {{--<button type="button" class="btn btn-default">1</button>--}}
                                    {{--<button type="button" class="btn btn-default">1</button>--}}
                                    {{--<button type="button" class="btn btn-default">-</button>--}}

                                {{--</ul>--}}
                        </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>





            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->

</section><!-- /.content -->
     <script>
         var cowsnumber  = $('input[name=cowsnumber]').val();
         var seatnumber  = $('input[name=seatnumber]').val();
         console.log(cowsnumber,seatnumber);
         //当点击时获取座位数量和行数进行遍历
         function  editlayout() {
             var cowsnumber = $('input[name=cowsnumber]').val();
             //座位数量
             var seatnumber = $('input[name=seatnumber]').val();
             //循环列数进行添加
             for (var i = 0; i < cowsnumber; i++) {


                  $('.modal-body').eq(0).append('<ul>--a--</ul>');


//                 $('[data-toggle="popover"]').popover();

//             }

//             正确格式： $("outerSelector").on('eventType','selector',function(){})；
//          outerSelector 是一个一直存在的DOM， selector是你要监听点击的节点；
//          所以正确的写法是（楼主代码）：$("tbody").on('click',"[name='submitbutton']",function(){....});


//                 for (let j = 0; j <= seatnumber; j++) {
//                     newol.append('<button type="button" class="btn btn-default">1</button>');
//
//                 }


             }
         }
     </script>

@endsection