@extends('admin.users.index')

@section("contents")
    <form action="/admin/users/child" method="get" class="form-inline">
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
            <th>会员详情id</th>
            <th>账号</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $list as $info)
            <tr class="gradeX">
                <td>{{ $info->id }}</td>
                <td>{{ $info->uid}}</td>
                <td>{{ $info->phone }}</td>
                <td>
                    <div class="tpl-table-black-operation">
                        <a href="{{ url('/admin/users/show') }}/{{ $info->uid }}">
                            <i class="am-icon-pencil"></i> 查看会员详情
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $list->appends($where)->links() }}
@endsection
