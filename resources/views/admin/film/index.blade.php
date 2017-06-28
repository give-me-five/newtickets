@extends('admin.base')

    @section('content')
    <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">浏览影片</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th width="150">ID</th>
                                            <th width="150">片名</th>
                                            <th width="160">图片</th>
                                            <th width="120">类型</th>
                                            <th width="150">首映时间</th>
                                            <th width="150">时长</th>
                                            <th width="150">导演</th>
                                            <th width="150">主演</th>
                                            <th width="150">地区</th>
                                            <th width="150">简介</th>
                                            <th width="150">语言</th>
                                            <th width="150">评分</th>
                                            <th width="180">状态</th>
                                            <th width="150">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->picname}}</td>
                                            <td>{{$v->fid}}</td>
                                            <td>{{$v->firsttime}}</td>
                                            <td>{{$v->duration}}</td>
                                            <td>{{$v->director}}</td>
                                            <td>{{$v->actor}}</td>
                                            <td>{{$v->region}}</td>
                                            <td>{{$v->introduction}}</td>
                                            <td>{{$v->language}}</td>
                                            <td>{{$v->score}}</td>
                                            <td><if condition="{{$v->status}} eq 1"><!-- 禁用 --><else/>正在上映</if></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                      
            
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
@endsection