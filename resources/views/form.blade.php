<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS变量</title>
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <style type="text/css">

    </style>
</head>
<body>
    <form action="/insert" method="post">
        用户名:<input type="text" value="" name="name">
        密码:<input type="password" value="" name="pass">
        {{csrf_field()}}
        <input type="submit" value="登录">
    </form>
</body>
<script type="text/javascript">

</script>
</html>