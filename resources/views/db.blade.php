<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS变量</title>
</head>
<body>
    <center>
        <form action="/db" method="post">
            搜索:<input type="text" name="keywords">
            <input type="submit" value="搜索">
        </form>
        <table border="1px" width="300px">
            <tr>
                <th>ID</th>
                <th>UNAME</th>
                <th>PASS</th>
                <th>EMAIL</th>
                <th>PHONE</th>
            </tr>
            @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                     <td>{{$row->uname}}</td>
                     <td>{{$row->pass}}</td>
                     <td>{{$row->email}}</td>
                     <td>{{$row->phone}}</td>
                </tr>
                @endforeach
        </table>
        {{$data->append($require)->render()}}
    </center>
</body>
<script type="text/javascript">

</script>
</html>