@extends('AdminPublic.public')
@section('main')
    <div style="background-color: #0a8e6c;width:100%;height: 200px;">这是页面主题</div>
    <h1>{{$a}}</h1>
    <h1>遍历数组</h1>
    <table border="1px" width="300px">
        <tr>
            <th>NAME</th>
            <th>AGE</th>
        </tr>

        @foreach($arr as $row)
            <tr>
                <td>{{$row['name']}}</td>
                <td>{{$row['age']}}</td>
            </tr>
            @endforeach
    </table>
    {!!$b!!}
@endsection
@section("title","前台首页")