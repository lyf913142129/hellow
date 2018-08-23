<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS变量</title>
    <style type="text/css">

    </style>
</head>
<body>
<form action="/file" method="post" enctype="multipart/form-data">
    文件上传:<input type="file" name="pic" ><br>
    {{csrf_field()}}
    <input type="submit" value="提交">
</form>
</body>
<script type="text/javascript">

</script>
</html>