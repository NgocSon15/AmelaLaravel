<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
<h2>Sửa thông tin task {{$id}}</h2>
<form method="post" action="/tasks/{{$id}}">
    @csrf
    @method('PUT')
    <input name="id" value="{{$id}}" hidden/>
    <label>Tên:</label>
    <br>
    <input type="text" name="name" class="form-control"/>
    <input type="submit" value="Sửa"/>
</form>
</body>
</html>
