<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>列表模板</title>
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <style type="text/css">

    </style>
</head>
<body>
    <center>
        <table border="1px" width="400px">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>苍井空</td>
                <td>123</td>
                <td><a href="">删除</a><a href="">修改</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>武藤兰</td>
                <td>123</td>
                <td><form action="userss/2" method="post">
                        <button>删除</button>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    </form><a href="/userss/2/edit">修改</a>
                </td>
            </tr>
        </table>
    </center>
</body>
<script type="text/javascript">

</script>
</html>