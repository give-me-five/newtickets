@extends('admin.users.index')

@section("contents")
    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
        <thead>
            <tr>
                <th>id号</th>
                <th>真实姓名</th>
                <th>性别</th>
                <th>地址</th>
                <th>状态</th>
                <th>电子邮件</th>
                <th>首次登录时间</th>
                <th>最后一次登录时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->nickname }}</td>
                <td>{{ $list->sex }}</td>
                <td>{{ $list->address }}</td>
                <td> @if($list->status == 1 ) 启用中 @else 禁用中 @endif </td>
                <td>{{ $list->email }}</td>
                <td>{{ $list->firsttime }}</td>
                <td>{{ $list->lasttime }}</td>
                <td>

                    @if($list->status == 1)
                        <a href="{{url('/admin/users/del')}}/{{$list->id}}" onclick="return del()">点击禁用</a>
                    @else
                        <a href="{{url('/admin/users/reset')}}/{{$list->id}}" onclick="return reset()">点击启用</a>
                    @endif

                </td>
            </tr>
        </tbody>
    </table>
@endsection
<script>
    //禁用
    function del(){
        if(confirm('你确定要禁用吗？？')){
            return true;
        }else{
            return false;
        }
    }
    //启用
    function reset(){

        if(confirm('该用户违反相关规定也被禁用，你确定要重新启用吗？？')){

            return true;
        }else{
            return false;
        }
    }
</script>