@extends('admin.base')
    @section('content')
        <!-- 内容区域 -->
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">编辑新闻</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">
                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{url('admin/news')}}" enctype="multipart/form-data" method="post">
                     {{ csrf_field() }}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">新闻标题 <span class="tpl-form-line-small-title">Title</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="title" placeholder="请输入标题文字">
                                <small>请填写标题文字10-20字左右。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">摘要 <span class="tpl-form-line-small-title">Description</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="description" placeholder="请输入摘要">
                                <small>摘要内容在30-40字左右。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">缩略图 <span class="tpl-form-line-small-title">Images</span></label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                   <!--  <div class="tpl-form-file-img">
                                        <img src="{{asset('myadmin/img/aaa.jpg')}}" alt="">
                                    </div> -->
                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i> 添加缩略图片
                                    </button>

                                    <input id="doc-form-file" type="file" multiple="" name="thumb">


                                </div>

                            </div>
                        </div>


                        <div class="am-form-group">
                            <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容</label>
                            <div class="am-u-sm-9">
                                <textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容" name="content"></textarea>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection