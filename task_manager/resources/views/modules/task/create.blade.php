<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
<h2>Thêm task</h2>
<form method="post" action="/tasks">
    @csrf
    <label>Tên:</label>
    <br>
    <input type="text" name="name" class="form-control"/>
    <br>
    <input type="submit" value="Thêm"/>
</form>
</body>
</html>
