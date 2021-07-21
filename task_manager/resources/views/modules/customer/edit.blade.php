<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
<h2>Sửa thông tin khách hàng {{$id}}</h2>
<form method="post" action="/customer/{{$id}}/update">
    @csrf
    <input name="id" value="{{$id}}" hidden/>
    <label>Tên:</label>
    <br>
    <input type="text" name="name" class="form-control"/>
    <br>
    <label>Số điện thoại:</label>
    <br>
    <input type="text" name="phone" class="form-control"/>
    <br>
    <label>Email:</label>
    <br>
    <input type="text" name="email" class="form-control"/>
    <br>
    <input type="submit" value="Sửa"/>
</form>
</body>
</html>
