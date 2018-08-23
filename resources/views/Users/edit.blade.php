<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改模板</title>
</head>
<body>
<form action="/userss/{{$id}}" method="post">
    用户名:<input type="text" name="name" value="taoge"><br>
    密码:<input type="password" name="password" value="123"><br>
    {{csrf_field()}}
    {{method_field("PUT")}}
    <input type="submit" value="修改">

</form>
</body>
</html>