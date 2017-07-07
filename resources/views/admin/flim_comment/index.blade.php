
@extends('admin.base')
    @section('content')
<div class="row-content am-cf">
    <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">当前位置：浏览影片</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th width="150">ID</th>
                                            <th width="150">影片</th>
                                            <th width="160">会员账号</th>
                                            <th width="150">评论内容</th>
                                            <th width="150">评论时间</th>
                                            <th width="150">点击数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comment as $list)
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->fid}}</td>
                                        <td>{{$list->uid}}</td>
                                        <td>{{$list->comment}}</td>
                                        <td>{{$list->created_at}}</td>
                                        <td>{{$list->support}}</td>
                                    @endforeach
                                      
            
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
        </div>
    </div>
</div>
    @endsection

