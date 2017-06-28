@extends('admin.users.index')

@section("contents")
    @foreach( $list as $info)
    <tr class="gradeX">
        <td>{{ $info->id }}</td>
        <td>{{ $info->phone }}</td>
        <td>{{ $info->addtime }}</td>
        <td>
            <div class="tpl-table-black-operation">
                <a href="javascript:;">
                    <i class="am-icon-pencil"></i> 编辑
                </a>
                <a href="javascript:;" class="tpl-table-black-operation-del">
                    <i class="am-icon-trash"></i> 删除
                </a>
            </div>
        </td>
    </tr>
    @endforeach
@endsection