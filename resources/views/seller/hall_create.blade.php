@extends('seller.base')
    @section('content')
<div class="grid_8">
    <div class="mws-panel">
        <div class="mws-panel-header">
            <span>编辑放映厅</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('/business/hall')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="mws-form-inline">                                
                    <div class="mws-form-row">
                        <label class="mws-form-label">影厅名称</label>
                        <div class="mws-form-item">
                            <input type="text" class="large" style="width:15%;" name="title">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">座位布局</label>
                        <div class="mws-form-item">
                            <input type="text" class="large" style="width:50%;" name="layout">
                        </div>
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="添加" class="btn btn-danger">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection