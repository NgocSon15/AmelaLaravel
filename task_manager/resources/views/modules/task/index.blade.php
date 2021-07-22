<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách task</h1>
<a href="/tasks/create">Thêm mới</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên task</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @if(count($tasks) == 0)
        <tr>
            <td colspan="3">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($tasks as $key => $task)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$task}}</td>
                <td>
                    <a href="{{route('tasks.show', ['task' => $key])}}">Xem</a> | <a href="{{route('tasks.edit', ['task' => $key])}}">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => $key])}}">Xóa</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
</body>
</html>
