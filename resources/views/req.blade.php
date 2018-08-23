<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS变量</title>
    <style type="text/css">

    </style>
</head>
<body>
<form action="/req" method="post">
    用户名:<input type="text" name="name"><br>
    电话:<input type="text" name="phone" value="{{old('phone')}}"><br>
    邮箱:<input type="text" name="email" value="{{old('email')}}"><br>
    {{csrf_field()}}
    <input type="submit" value="登录">
</form>
</body>
<script type="text/javascript">

</script>
</html>