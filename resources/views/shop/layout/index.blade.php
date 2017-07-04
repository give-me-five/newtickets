@extends('shop.base')
@section('content')
    {{-- 加载选坐插件的样式 --}}
    <script src="{{asset('home/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.seat-charts.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/main.css')}}" />
    <style type="text/css">
        .demo{width:700px; margin:40px auto 0 auto; min-height:450px;}
        @media screen and (max-width: 360px) {.demo {width:340px}}

        .front{width: 300px;margin: 5px 32px 45px 32px;background-color: #f0f0f0;	color: #666;text-align: center;padding: 3px;border-radius: 5px;}
        .booking-details {float: right;position: relative;width:200px;height: 450px; }
        .booking-details h3 {margin: 5px 5px 0 0;font-size: 16px;}
        .booking-details p{line-height:26px; font-size:16px; color:#999}
        .booking-details p span{color:#666}
        div.seatCharts-cell {color: #182C4E;height: 25px;width: 26px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;}
        div.seatCharts-seat {cursor: pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
        div.seatCharts-row {height: 35px;}
        div.seatCharts-seat.available {background:url({{asset('home/images/26-25.png')}});}
        div.seatCharts-seat.available1{background:url({{asset('home/images/hong26-25.png')}});}
        div.seatCharts-seat.focused {background-color: #76B474;border: none;}
        div.seatCharts-seat.selected {background:url({{asset('home/images/hong26-25.png')}});}
        div.seatCharts-seat.unavailable {background:url({{asset('home/images/26-25hei.png')}});cursor: not-allowed;}
        div.seatCharts-container {border-right: 1px dotted #adadad;width: 400px;padding: 20px;float: left;}
        div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 16px;}
        ul.seatCharts-legendList {padding-left: 0px;}
        .seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;}
        span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;}
        .checkout-button {display: block;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
            background: rgb(235, 0, 42) none repeat scroll 0% 0%;
            border: 0px none;
            width: 155px;
            height: 42px;
            line-height: 42px;
            color: rgb(255, 255, 255);
            font-size: 14px; cursor:pointer}
        #selected-seats {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;}
        #selected-seats li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}
    </style>


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
                                <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="布局名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">座位数量：</label>
                            <div class="col-sm-4">
                                <input type="number" min="1" name="title" class="form-control" id="inputEmail3" placeholder="每排的座位数量">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">座位数量：</label>
                            <div class="col-sm-4">
                                <input type="number" min="1" name="title" class="form-control" id="inputEmail3" placeholder="座位数量">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">座位布局：</label>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">编辑布局</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">座位数量：</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="座位数量" name="number">
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
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">布局编辑</h4>
                        </div>
                        <div class="modal-body">
                            <div id="main">
                                <h2 class="top_title">jQuery在线选座订座（影院版</h2>
                                <div class="demo">
                                    <div id="seat-map">
                                        <div class="front">屏幕</div>
                                    </div>
                                    <div class="booking-details">
                                        <p>影片：<span>星际穿越</span></p>
                                        <p>影院：<span>北京沃美影城回龙观店</span></p>
                                        <p>影厅：<span>七号彩虹厅</span></p>
                                        <p>场次：<span>11月14日 21:00</span></p>
                                        <p>座位：</p>
                                        <ul id="selected-seats"></ul>
                                        <p>票数：<span id="counter">0</span></p>
                                        <p>总计：<b>￥<span id="total">0</span></b></p>

                                        <button class="checkout-button">确认信息,下单</button>

                                        <div id="legend"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>

                                <br/>
                            </div>

                            </div>
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
    <script type="text/javascript">
        var price = 80; //票价
        $(document).ready(function() {
            var $cart = $('#selected-seats'), //座位区
                    $counter = $('#counter'), //票数
                    $total = $('#total'); //总计金额

            var sc = $('#seat-map').seatCharts({
                map: [  //座位图
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    '__________',
                    'aaaaaaaa__',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aa__aa__aa'
                ],
                naming : {
                    top : false,
                    getLabel : function (character, row, column) {
                        return column;
                    }
                },
                legend : { //定义图例
                    node : $('#legend'),
                    items : [
                        [ 'a', 'available',   '可选座' ],
                        [ 'a', 'available1',  '已选座' ],
                        [ 'a', 'unavailable', '已售出']
                    ]
                },
                click: function () { //点击事件
                    if (this.status() == 'available') { //可选座
                        $('<li>'+(this.settings.row+1)+'排'+this.settings.label+'座</li>')
                                .attr('id', 'cart-item-'+this.settings.id)
                                .data('seatId', this.settings.id)
                                .appendTo($cart);

                        $counter.text(sc.find('selected').length+1);
                        $total.text(recalculateTotal(sc)+price);

                        return 'selected';
                    } else if (this.status() == 'selected') { //已选中
                        //更新数量
                        $counter.text(sc.find('selected').length-1);
                        //更新总计
                        $total.text(recalculateTotal(sc)-price);

                        //删除已预订座位
                        $('#cart-item-'+this.settings.id).remove();
                        //可选座
                        return 'available';
                    } else if (this.status() == 'unavailable') { //已售出
                        return 'unavailable';
                    } else {
                        return this.style();
                    }
                }
            });
            //已售出的座位
            sc.get(['1_2', '4_4','4_5','6_6','6_7']).status('unavailable');

        });
        //计算总金额
        function recalculateTotal(sc) {
            var total = 0;
            sc.find('selected').each(function () {
                total += price;
            });

            return total;
        }
    </script>

</section><!-- /.content -->
@endsection