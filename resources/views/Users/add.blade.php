<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加模板</title>
</head>
<body>
<form action="/userss" method="post">
    用户名:<input type="text" name="name"><br>
    密码:<input type="password" name="password"><br>
    {{csrf_field()}}
    <input type="submit" value="提交">

</form>
</body>
</html>