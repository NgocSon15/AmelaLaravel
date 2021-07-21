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
    <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>
            <a href="/tasks/1">Xem</a> | <a href="/tasks/1/edit">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => 1])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Nguyễn Văn B</td>
        <td>
            <a href="/tasks/2">Xem</a> | <a href="/tasks/2/edit">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => 2])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Văn C</td>
        <td>
            <a href="/tasks/3">Xem</a> | <a href="/tasks/3/edit">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => 3])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nguyễn Văn D</td>
        <td>
            <a href="/tasks/4">Xem</a> | <a href="/tasks/4/edit">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => 4])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Nguyễn Văn E</td>
        <td>
            <a href="/tasks/5">Xem</a> | <a href="/tasks/5/edit">Sửa</a> | <a href="{{route('tasks.destroy', ['task' => 5])}}">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
