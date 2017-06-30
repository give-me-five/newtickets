@extends('admin.root.index')

@section("contents")
    <form action="/admin/root/" method="get" class="form-inline">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputName2">关键字:</label>
            <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="账号">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>

        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
            <thead>
                <tr>
                    <th>id号</th>
                    <th>账号</th>
                    <th>真实姓名</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $list as $info)
                <tr class="gradeX">
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->account}}</td>
                    <td>{{ $info->name }}</td>
                    <td> @if($info->status == 2 || $info->status == 3) 启用 @else 禁用 @endif</td>
                    <td>{{ $info->addtime }}</td>
                    <td>
                        <div class="tpl-table-black-operation">
                            <a href="/admin/root/{{ $info->id }}">
                                <i class="am-icon-pencil"></i> 查看会员详情
                            </a>
                            @if($info->status == 2 || $info->status == 3)
                                <a href="javascript:doDel({{$info->id}})" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 点击禁用
                                </a>
                            @else
                                <a href="/admin/root/{{ $info->id }}/edit" onclick="return reset()" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 点击启用
                                </a>
                            @endif

                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $list->appends($where)->links() }}
@endsection
<form action="" method="post" name="myform">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
</form>
<script>
    //启用
    function reset(){
        if(confirm('你确定要启用吗？？')){
            return true;
        }else{
            return false;
        }
    }

    function doDel(id){
        if(confirm('你确定要禁用吗？？')){
            window.myform.action = "/admin/root/"+id;
            window.myform.submit();
        }
    }
</script>